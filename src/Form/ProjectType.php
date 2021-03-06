<?php


namespace App\Form;
use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ProjectType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Project','attr' => [
        'style' => 'margin-bottom:15px;margin-left: 15px; width:500 px']])
            ->add('description', TextType::class, ['label' => 'Description','attr' => [
        'style' => 'margin-bottom:15px;margin-left: 15px; width:500px']])
            ->add('sellingPrice', IntegerType::class, ['label' => 'selling Price','attr' => [
                'style' => 'margin-bottom:15px;margin-left: 15px; width:500 px']])
            ->add('created_at', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd','attr' => [
                    'style' => 'margin-bottom:15px;margin-left: 22px; width:500 px']
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}