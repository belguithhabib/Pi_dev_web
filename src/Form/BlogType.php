<?php

namespace App\Form;
use App\Entity\Article;
use App\Entity\Boost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\TheChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class BlogType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {


        $builder

            ->add('typeBoost', ChoiceType::class, [
                'choices'  => [
                    'Silver' => 'Silver',
                    'Gold' => 'Gold',
                    'Platinum' => 'Platinum',

                ]])
            ->add('prix_boost', ChoiceType::class, [
                'choices'  => [
                    '5DT/Jours' => '5',
                    '20DT/Semaine' => '20',
                    '35DT/Mois' => '35',

                ]]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Boost::class,
        ]);
    }

}
