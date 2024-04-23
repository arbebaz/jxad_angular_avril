<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // ->add('fichier', FileType::class, [
        //     "mapped" => false, 
        //     "label" => "Photo de profil :",
        //     "required" => false,
        //     'row_attr' => [
        //         'class' => 'row mb-3 d-flex justify-content-center'

        //     ],
        //     "attr" => [ // tableau des attributs 
        //         "class" => "border border-dark row mb-3"

        //     ]
        // ])
            ->add('email', EmailType::class, [
                "label" => "Email :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])

            ->add('nom', TextType::class, [
                "label" => "Nom :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])
            ->add('prenom', TextType::class, [
                "label" => "Prénom :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])
            ->add('adresse', TextType::class, [
                "label" => "Adresse :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])
            ->add('codePostal', IntegerType::class, [
                "label" => "Code postal :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])
            ->add('telephone', IntegerType::class, [
                "label" => "Téléphone :",
                "required" => false,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3 d-flex justify-content-center"

                ]
            ])

            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => ['label' => 'Modifier mon mot de passe : '],
                'second_options' => ['label' => 'Confirmer le mot de passe : '],
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password',
                "class" => "border border-dark row mb-3 d-flex justify-content-center"
            ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir min. 6 caractères.',
                        // max length allowed by Symfony for security reasons
                        'max' => 20,
                        'maxMessage' => 'Votre mot de passe doit contenir max. 20 caractères.',
                    ]),
                ],
            ])

            
            ->add('Modifier', SubmitType::class, [
                "attr" => [ // tableau des attributs 
                    "class" => "btn btn-dark d-flex justify-content-center"

                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
