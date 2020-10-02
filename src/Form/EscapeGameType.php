<?php

namespace App\Form;

use App\Entity\EscapeGame;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EscapeGameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('duration')
            ->add('date_time')
            ->add('number_min')
            ->add('number_max')
            ->add('public')
            ->add('excerpt')
            ->add('category_name')
            ->add('category_font')
            ->add('category_color')
            ->add('resume_text')
            ->add('resume_image')
            ->add('introduction_text')
            ->add('introduction_image')
            ->add('instructions_text')
            ->add('instructions_image')
            ->add('happyEnd_text')
            ->add('happyEnd_image')
            ->add('gameOver_text')
            ->add('gameOver_image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EscapeGame::class,
        ]);
    }
}
