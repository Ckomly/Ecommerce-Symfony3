<?php

namespace CA\CommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('value',ChoiceType::class,
                       array('choices' => array(
                               '1' => '1',
                               '2' => '2',
                               '3' => '3',
                               '4' => '4',
                               '5' => '5'),
                      'choices_as_values' => true,
                      'multiple'=>false,
                      //expanded will turn our choicefield to a radiofield.
                      'expanded'=>true))
                      ->add('comment');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CA\CommerceBundle\Entity\Rate'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ca_commercebundle_rate';
    }


}
