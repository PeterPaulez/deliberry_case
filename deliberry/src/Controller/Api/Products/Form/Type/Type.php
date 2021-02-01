<?php
namespace App\Controller\Api\Products\Form\Type;

use App\Controller\Api\Products\Form\Model\Dto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Type extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('name', TextType::class)
        ->add('description', TextType::class)
        ->add('ean', TextType::class)
        ->add('sku', TextType::class)
        ->add('type', TextType::class)
        ->add('weight', TextType::class)
        ->add('enabled', TextType::class)
        ->add('categories', CollectionType::class,[
            'allow_add' => true,
            'allow_delete' => true
        ]);
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults([
            'data_class' => Dto::class
        ]);
    }
}