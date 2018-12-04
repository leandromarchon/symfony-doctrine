<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array(
                'label' => 'Nome',
                'attr' => array(
                    'placeholder' => 'Informe o nome',
                    'class' => 'form-control'
                )
            ))
            ->add('raca', EntityType::class, array(
                'class' => 'App\Entity\Raca',
                'choice_label' => 'nome',
                'group_by' => 'nomeEspecie',
                'placeholder' => 'Selecione uma opção',
                'label' => 'Raça',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('data_nascimento', DateType::class, array(
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'label' => 'Data de Nascimento',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('salvar', SubmitType::class, array(
                'label' => 'Salvar',
                'attr' => array(
                    'class' => 'btn btn-success mt-3'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
