<?php

namespace Shmuft\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class)
            ->add('body', TextareaType::class)
            ->add('tags', TextType::class);
//            ->add('created', 'datetime')
//            ->add('updated', 'datetime');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Shmuft\NewsBundle\Entity\News',
        ));

    }

    public function getName()
    {
        return 'shmuft_news_bundle_news';
    }

    public function getDefaultOptions(array $options){
        return array(
            'validator_groups' => array('news'),
        );
    }
}
