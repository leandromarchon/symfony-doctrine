<?php

namespace App\Form;

use App\Entity\Endereco;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EnderecoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('logradouro', TextType::class, array(
                'label' => 'Logradouro',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('numero', TextType::class, array(
                'label' => 'Número',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('bairro', TextType::class, array(
                'label' => "Bairro",
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('cidade', TextType::class, array(
                'label' => 'Cidade',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Endereco::class,
        ]);
    }
}
