<?php

namespace App\Form;

use App\Entity\Cliente;
use App\Form\EnderecoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array(
                'label' => 'Nome',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telefone', TextType::class, array(
                'label' => 'Telefone',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('endereco', EnderecoType::class, array(
                'label' => false
            ))
            ->add('animal', EntityType::class, array(
                'class' => 'App\Entity\Animal',
                'choice_label' => 'nome',
                'multiple' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('salvar', SubmitType::class, array(
                'label' => 'Salvar',
                'attr' => array(
                    'class' => 'btn btn-primary mt-3'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}
