<?php

namespace Acme\TaskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'Ваше имя'
            ))
            ->add('surname', 'text', array(
                'label' => "Ваша фамилия"
            ))
            ->add('email', 'text', array(
                'label' => "Email"
            ));
    }

    public function getName()
    {
        return 'acme_task_form';
    }
}