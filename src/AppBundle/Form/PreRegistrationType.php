<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreRegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname')->add('lastname')->add('phoneNumber')->add('email')->add('location')->add('gender')->add('ageRangeId')->add('age')->add('serviceCategoryIdIsInterested')->add('guestId')->add('customerId')->add('metaTitle')->add('isEnabled')->add('isDeleted')->add('metaDescription')->add('dateAdd')->add('dateUpd');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PreRegistration'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_preregistration';
    }
}
