<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Votre email :',
                'required' => true,
                'constraints' => [
                    new NotBlank
                ]

            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet :',
                'required' => true,
                'constraints' => [
                    new NotBlank
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Écrivez votre message :',
                'required' => true,
                'constraints' => [
                    new NotBlank
                ]
            ])
            ->add('file', FileType::class, [
                'label' => 'Sélectionner un fichier : **',
                'required' => true,
                'disabled' => !$this->security->isGranted('ROLE_ARTISTE'),
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
                "attr" => [ // tableau des attributs 
                    "class" => "btn btn-dark d-flex justify-content-center"
                ]
            ]);
    }

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
