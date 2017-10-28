<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('vendorId')->add('manufacturerId')->add('categoryDefaultId')->add('vendorDefaultId')->add('taxRulesId')->add('onSale')->add('approved')->add('deleted')->add('suspended')->add('quantity')->add('minimalQuantiy')->add('price')->add('wholesalePrice')->add('wholesaleThreshold')->add('unitPriceRatio')->add('additionalShippingCost')->add('reference')->add('location')->add('locCoordinates')->add('width')->add('height')->add('weight')->add('lenght')->add('outOfStock')->add('quantityDiscount')->add('customizable')->add('uploadedFiles')->add('textFields')->add('active')->add('redirectType')->add('idProductRedirected')->add('availableForOrder')->add('availableDate')->add('serviceCondition')->add('showPrice')->add('indexed')->add('visibility')->add('dateAdd')->add('dateUpd')->add('advancedStockManagementt')->add('packStockType')->add('attachments')->add('attribute')->add('attributeCombination')->add('attributeImage')->add('category')->add('class')->add('attributeVendor')->add('carrier')->add('countryTax')->add('download')->add('vendorReductionCache')->add('language')->add('sale')->add('vendor')->add('supplier')->add('tag')->add('products')->add('campaigns');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_service';
    }
}
