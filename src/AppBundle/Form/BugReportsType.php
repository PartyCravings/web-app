<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BugReportsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('errorCode')->add('visibility')->add('type')->add('subject')->add('status')->add('severity')->add('phpVersion')->add('line')->add('file')->add('dupliacte')->add('blocks')->add('updatedBy')->add('dateUpd')->add('lastActivity')->add('dateAdd')->add('description')->add('nameId')->add('name')->add('assignedTo')->add('bugReportId');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\BugReports'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_bugreports';
    }
}
