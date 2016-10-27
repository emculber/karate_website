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
            "SELECT form_class_id, class_name, meeting_date, fname, lname from form_class, meeting, instructor where form_class.class_id = meeting.class_id and instructor.instructor_id = meeting.instructor_id and form_class.belt_id = :belt"
        );
        $statement->bindValue('belt', $user_belt);
        $statement->execute();
        $form_classes = $statement->fetchAll();

        $userID = $this->getUser()->getId();

        $statement = $connection->prepare(
            "SELECT weapon_class.class_id, class_name, age_group, weapon_description, meeting_date, instructor.fname, instructor.lname from weapon_class, meeting, instructor, users where weapon_class.class_id-23 = meeting.class_id and instructor.instructor_id = meeting.instructor_id and extract(YEAR FROM age(users.date_of_birth)) > weapon_class.age_group and users.id = :userId"
        );
        $statement->bindValue('userId', $userID);
        $statement->execute();
        $weapon_classes = $statement->fetchAll();

        $statement = $connection->prepare(
            "SELECT test_class.class_id, class_name, test_description, meeting_date, fname, lname from test_class, meeting, instructor where test_class_id = meeting.class_id and instructor.instructor_id = meeting.instructor_id ORDER BY test_class.class_id asc"
        );
        $statement->execute();
        $test_classes = $statement->fetchAll();
        return $this->render('KarateBundle:Default:index.html.twig', array(
            'form_classes' => $form_classes,
            'weapon_classes' => $weapon_classes,
            'test_classes' => $test_classes
        ));
    }
}
