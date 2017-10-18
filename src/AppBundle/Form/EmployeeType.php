<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idProfile')->add('idLang')->add('lastname')->add('firstname')->add('email')->add('passwd')->add('plainPwd')->add('lastPwdGen')->add('statsDateFrom')->add('statsDateTo')->add('statsCompareFrom')->add('statsCompareTo')->add('statsCompareOption')->add('preselectDateRange')->add('boColor')->add('active')->add('optin')->add('idLastOrder')->add('idLastCustomerMessage')->add('idLastCustomer')->add('lastConnectionDate')->add('vendor');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Employee'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_employee';
    }


}
