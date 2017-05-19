<?php

namespace CA\CommerceBundle\Form;

use CA\CommerceBundle\Entity\Product;
use CA\CommerceBundle\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('description')->add('price')
                ->add('category', EntityType::class, array(
                      'placeholder' => 'Choose an option',
                      'required' => false,
                      // query choices from this entity
                      'class' => 'CACommerceBundle:Category',
                      'choice_value' => 'id',
                      // use the Category.name property as the visible option string
                      'choice_label' => 'name',
                      ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CA\CommerceBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ca_commercebundle_product';
    }


}
