<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('associationType')->add('associationId')->add('uploadedBy')->add('fileName')->add('name')->add('nameId')->add('dateAdd')->add('dateUpd')->add('private')->add('description')->add('mimetype')->add('filesize')->add('drive')->add('accessKey')->add('image')->add('audio')->add('video')->add('isEnabled')->add('isSuspended')->add('isDeleted')->add('campaign');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Media'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_media';
    }
}
