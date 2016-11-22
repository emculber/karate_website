<?php

namespace KarateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/classes", name="classes")
     */
    public function indexAction()
    {
        $user_belt = $this->getUser()->getBelt()->getBeltId();

        $connection = $this->getDoctrine()->getManager()->getConnection();
        $statement = $connection->prepare(
            "SELECT form_class.class_id, form_class.class_name, form_class.start_date, form_class.end_date, m.meeting_date, instructor.fname, instructor.lname, t.test_description from form_class, instructor, meeting m LEFT OUTER JOIN test_class t ON m.test_id = t.test_class_id where form_class.class_id = m.class_id and m.instructor_id = instructor.instructor_id and form_class.belt_id = :belt ORDER BY form_class.class_id, m.meeting_date ASC"
        );
        $statement->bindValue('belt', $user_belt);
        $statement->execute();
        $form_classes_raw = $statement->fetchAll();

        $current_id = 0;
        $form_classes = array();
        foreach ($form_classes_raw as $class) {
            if ($current_id != $class['class_id']) {
                $current_id = $class['class_id'];
                $form_classes[$current_id ] = array(
                    'class_id' => $current_id,
                    'class_name' => $class['class_name'],
                    'start_date' => $class['start_date'],
                    'end_date' => $class['end_date'],
                    'meeting' => array(),
                    'test_instructor_fname' => $class['fname'],
                    'test_instructor_lname' => $class['lname'],
                    'test_instructor_meeting' => $class['meeting_date'],
                    'test_instructor_description' => $class['test_description'],
                );
            }
            if ($class['test_description'] == "") {
                array_push($form_classes[$current_id]['meeting'], array(
                    'instructor_fname' => $class['fname'],
                    'instructor_lname' => $class['lname'],
                    'instructor_meeting' => date('l', strtotime($class['meeting_date'])) . " at " . date("H:i:s",strtotime($class['meeting_date'])),
                ));
            }else{
                $form_classes[$current_id]['test_instructor_fname'] = $class['fname'];
                $form_classes[$current_id]['test_instructor_lname'] = $class['lname'];
                $form_classes[$current_id]['test_instructor_meeting'] = $class['meeting_date'];
                $form_classes[$current_id]['test_instructor_description'] = $class['test_description'];
            }
        }

        $userID = $this->getUser()->getId();

        $statement = $connection->prepare(
            "SELECT weapon_class.class_id, weapon_class.class_name, weapon_class.start_date, weapon_class.end_date, weapon_class.age_group, weapon_class.weapon_desc, instructor.fname, instructor.lname, m.meeting_date, t.test_description FROM weapon_class, instructor, users, meeting m LEFT OUTER JOIN test_class t ON m.test_id = t.test_class_id where weapon_class.class_id = m.class_id and m.instructor_id = instructor.instructor_id and extract(YEAR FROM age(users.date_of_birth)) > weapon_class.age_group and users.id = :userId ORDER BY weapon_class.class_id, m.meeting_date ASC"
        );
        $statement->bindValue('userId', $userID);
        $statement->execute();
        $weapon_classes_raw = $statement->fetchAll();

        $current_id = 0;
        $weapon_classes = array();
        foreach ($weapon_classes_raw as $class) {
            if ($current_id != $class['class_id']) {
                $current_id = $class['class_id'];
                $weapon_classes[$current_id ] = array(
                    'class_id' => $current_id,
                    'class_name' => $class['class_name'],
                    'start_date' => $class['start_date'],
                    'end_date' => $class['end_date'],
                    'age_group' => $class['age_group'],
                    'weapon_desc' => $class['weapon_desc'],
                    'meeting' => array(),
                    'test_instructor_fname' => $class['fname'],
                    'test_instructor_lname' => $class['lname'],
                    'test_instructor_meeting' => $class['meeting_date'],
                    'test_instructor_description' => $class['test_description'],
                );
            }
            if ($class['test_description'] == "") {
                array_push($weapon_classes[$current_id]['meeting'], array(
                    'instructor_fname' => $class['fname'],
                    'instructor_lname' => $class['lname'],
                    'instructor_meeting' => $class['meeting_date'],
                ));
            }else{
                $weapon_classes[$current_id]['test_instructor_fname'] = $class['fname'];
                $weapon_classes[$current_id]['test_instructor_lname'] = $class['lname'];
                $weapon_classes[$current_id]['test_instructor_meeting'] = $class['meeting_date'];
                $weapon_classes[$current_id]['test_instructor_description'] = $class['test_description'];
            }
        }

        return $this->render('KarateBundle:Default:index.html.twig', array(
            'form_classes' => $form_classes,
            'weapon_classes' => $weapon_classes,
            //'test_classes' => $test_classes
        ));
    }
}
