<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Article;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idGouvernorat',ChoiceType::class, [
                'choices'  => [
                    'Ariana'=>1,
                    'Beja' => 2,
                    'Bizerte' => 4,
                    'Gabes' => 5,
                    'Gafsa'=>6,
                    'Jendouba' => 7,
                    'Kairouan' => 8,
                    'Kebili' => 10,
                    'Kef'=>11,
                    'Mahdia' => 12,
                    'Manouba' => 13,
                    'Medenine' => 14,
                    'Monastir'=>15,
                    'Nabeul' => 16,
                    'Sfax' => 17,
                    'Siliana' => 19,
                    'Sousse'=>20,
                    'Tataouine' => 21,
                    'Tozuer' => 22,
                    'Tunis' => 23,
                    'Zaghouan'=>24,
                ],
            ])
            ->add('filter', SubmitType::class);
    }
}
