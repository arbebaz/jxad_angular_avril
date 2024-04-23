<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TypeTextType::class, [
                "label" => "Entrée une nouvelle catégorie :",
                'row_attr' => [
                    'class' => 'form-floating d-flex justify-content-center',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('dossier', TypeTextType::class, [
                "label" => "Dossier :",
                'row_attr' => [
                    'class' => 'form-floating d-flex justify-content-center',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('Ajouter', SubmitType::class, [
                "attr" => [ // tableau des attributs 
                    "class" => "btn btn-dark d-flex justify-content-center"

                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
