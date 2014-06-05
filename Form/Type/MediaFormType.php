<?php

namespace UEC\MediaImageBundle\Form\Type;

use UEC\MediaBundle\Form\Type\MediaFormType as BaseMediaFormType;
use Symfony\Component\Form\FormBuilderInterface;

class MediaFormType extends BaseMediaFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file', array(
                'required' => false,
                'label' => 'label.select_image',
            ))
        ;
    }

    public function getName()
    {
        return 'uec_media_image_form_media';
    }
} 