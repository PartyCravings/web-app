<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('partyeditorId')->add('link')->add('isPreregistered')->add('vendorId')->add('vendorsGroupsId')->add('customerId')->add('isSecured')->add('securityRegId')->add('coordinatesLat')->add('coordinatesLong')->add('rating')->add('partyRating')->add('class')->add('category')->add('description')->add('preregistrationNumber')->add('metaTitle')->add('metaDescription')->add('rsvp')->add('dateAdd')->add('dateUpd')->add('deleted')->add('suspended')->add('enabled')->add('totalGuest')->add('totalCost')->add('zoneId');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Party'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_party';
    }
}
