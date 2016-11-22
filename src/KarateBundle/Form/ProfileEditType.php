<?php

namespace KarateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProfileEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fname');
        $builder->add('lname');
        $builder->add('dateOfBirth', BirthdayType::class);
        $builder->add('address');
        $builder->add('zipcode');
        $builder->add('city');
        $builder->add('state');
        $builder->add('phoneNumber');
        $builder->add('belt', EntityType::class, array('class' => 'KarateBundle:Belt', 'choice_label' => 'belt'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'karate_user_profile_edit';
    }
}
