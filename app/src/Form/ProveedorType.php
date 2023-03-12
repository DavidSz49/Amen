<?php

namespace App\Form;

use App\Entity\Proveedor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Correo',EmailType::class)
            ->add('Telefono',NumberType::class)
            ->add('Estado',ChoiceType::class,[
                'choices' => [
                    'Activo' => 'Activo',
                    'Inactivo' => 'Inactivo',
                ]
            ])
            ->add('Tipo',ChoiceType::class,[
                'choices' => [
                    'Hotel' => 'Hotel',
                    'Pista' => 'Pista',
                    'Complemento' => 'Complemento'
                ]
                ])

            ->add('Guardar',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedor::class,
        ]);
    }
}
