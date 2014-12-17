<?php

namespace Immobilier\BudgetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BudgetGestType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomenclature')
            ->add('ratio')
            ->add('assiette')
            ->add('budgetHt')
            ->add('montantTva')
            ->add('budgetTtc')
            ->add('poste')
            ->add('ouvrage')
            ->add('type')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Immobilier\BudgetBundle\Entity\BudgetGest'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'immobilier_budgetbundle_budgetgest';
    }
}
