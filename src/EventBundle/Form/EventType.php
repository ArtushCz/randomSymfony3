<?php

namespace EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EventType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Název akce: ',
                    'attr' => array('class' => 'form-control')))
                ->add('time', DateTimeType::class, array(
                    'label' => 'čas konání: ',
                    'widget' => 'single_text',
                     'date_format' => 'dd.MM.yyyy  HH:mm',
                     'attr' => array('class' => 'form-control',  'placeholder' => 'DD.MM.YYYY HH:MM' )
                    ))
                ->add('location', TextType::class, array(
                    'label' => 'Lokace: ',
                    'attr' => array('class' => 'form-control')))
                ->add('details', TextareaType::class, array(
                    'label' => 'Detail akce: ',
                    'attr' => array('class' => 'form-control', 'rows' => '5')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EventBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'eventbundle_event';
    }

}
