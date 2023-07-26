<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array('label' => 'Titulo'))
            ->add('content', TextareaType::class, array('label' => 'contenido'))
            ->add('priority', ChoiceType::class, array('label' => 'Prioridad', 'choices' =>
            array(
                'alta' => 'high',
                'media' => 'medium',
                'baja' => 'low'
            )))
            ->add('hours', TextType::class, array('label' => 'Horas'))

            ->add('submit', SubmitType::class, array('label' => 'Guardar'));
    }
}
