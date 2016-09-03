<?php
// src/AppBundle/Form/ProductType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('brochure', 'file', array('label' => 'Brochure (PDF file)'))
            ->add('photo', 'file', array('label' => 'Foto'))
            ->add('save', 'submit')
            // ...
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product',
        ));
    }

    public function getName()
    {
        return 'product';
    }
}
