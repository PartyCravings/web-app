<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idState')->add('idManufacturer')->add('idSupplier')->add('idWarehouse')->add('alias')->add('company')->add('address1')->add('address2')->add('postcode')->add('city')->add('other')->add('phone')->add('phoneNumber')->add('vatNumber')->add('dateAdd')->add('dateUpd')->add('active')->add('deleted')->add('suspende')->add('format')->add('accountDetail');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Address'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_address';
    }


}
