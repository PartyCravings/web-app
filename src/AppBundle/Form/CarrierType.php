<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarrierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idReference')->add('idTaxRulesGroup')->add('name')->add('url')->add('active')->add('deleted')->add('suspended')->add('shippingHandling')->add('rangeBehavior')->add('isModule')->add('isFree')->add('shippingExternal')->add('needRange')->add('externalModuleName')->add('shippingMethod')->add('position')->add('maxWidth')->add('maxHeight')->add('maxDepth')->add('maxWeight')->add('grade')->add('group')->add('language')->add('vendor')->add('taxRulesGroupVendor')->add('zone');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Carrier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_carrier';
    }
}
