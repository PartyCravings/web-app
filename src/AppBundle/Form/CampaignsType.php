<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('slug')->add('masterId')->add('name')->add('assignedTo')->add('listId')->add('active')->add('description')->add('type')->add('cost')->add('template')->add('subject')->add('content')->add('createdBy')->add('complete')->add('visibility')->add('dateAdd')->add('dateEnd')->add('launchDate')->add('dateUpd')->add('lastActivity')->add('updatedBy')->add('sendAs')->add('enableRedirectLinks')->add('openRate')->add('clickRate')->add('unsubscribeRate')->add('isEnabled')->add('isSuspended')->add('isDeleted')->add('services')->add('imageUrl');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Campaigns'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_campaigns';
    }
}
