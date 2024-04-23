<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Unique;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
       
            ->add('nom', TextType::class, [
                "label" => "Nom :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('prenom', TextType::class, [
                "label" => "Prenom :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('email', EmailType::class, [
                "label" => "Email :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ],
                // 'constraints' => [
                //     new Unique([
                        
                //     ])
                // ]
            ])
            ->add('codePostal', IntegerType::class, [
                "label" => "Code postal :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('telephone', IntegerType::class, [
                "label" => "Téléphone :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])
            ->add('adresse', TextType::class, [
                "label" => "Adresse :",
                'row_attr' => [
                    'class' => 'form-floating',
                ],
                "required" => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ]
            ])

            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => ['label' => 'Mot de passe : '],
                'second_options' => ['label' => 'Confirmer le mot de passe : '],
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password',
                "class" => "border border-dark row mb-3"
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

          

            ->add('RGPDConsent', CheckboxType::class, [
                'mapped' => false,
                "attr" => [ // tableau des attributs 
                    "class" => "border border-dark row mb-3"

                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label' => "En m'inscrivant à ce site j'accepte les conditions générales."
            ])

            ->add('Inscription', SubmitType::class, [
                "attr" => [ // tableau des attributs 
                    "class" => "btn btn-dark"

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
