<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produits;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                "label" => "Titre :",
                'row_attr' => [
                    'class' => 'form-floating d-flex justify-content-center',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('description', TextType::class, [
                "label" => "Artiste :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating d-flex justify-content-center',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('prix', MoneyType::class, [
                "label" => "Prix :",
                "required" => false,
                

            ])
            ->add('fichier', FileType::class, [
                "mapped" => false, 
                "label" => "Fichier :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating d-flex justify-content-center'

                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('id_categorie', EntityType::class, [
                // "mapped" => false, 
                'label' => "Catégorie :",
                "placeholder" => "Sélectionner une catégorie",
                "class" => Categorie::class,
                "choice_label" => "nom"
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
            'data_class' => Produits::class,
        ]);
    }
}
