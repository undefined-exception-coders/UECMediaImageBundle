<?php

namespace UEC\MediaImageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaImageFormType extends AbstractType
{
    /**
     * @var string
     */
    protected $modelClass;

    function __construct($modelClass)
    {
        $this->modelClass = $modelClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('media', 'uec_media_image_form_media')
        ;
    }

    public function configureOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->modelClass,
        ));
    }

    public function getName()
    {
        return 'uec_media_image_form';
    }
} 