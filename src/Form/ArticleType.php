<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label'    => 'Заголовок',
                    'attr' => [
                        'class' => 'form-control'
                        ]
            ])
            ->add('summary', TextareaType::class, [
                'label'    => 'Краткое содержание',
                    'attr' => [
                        'class' => 'form-control'
                        ]                
            ])
            ->add('content', TextareaType::class, [
                'label'    => 'Основное содержание',
                    'attr' => [
                        'class' => 'form-control'
                        ]                
            ])
            ->add('publicationDate', DateType::class, array(
                'widget' => 'single_text',
                'label'    => 'Дата публикации',
                'attr' => [
                    'class' => 'form-control'
                    ]
            ))
            ->add('isActive', CheckboxType::class, [
                    'label'    => 'Публикация',
                    'attr' => [
                        'class' => 'form-control'
                        ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
