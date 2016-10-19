<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VSCPUnitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vscpunit')
            ->add('vscpnunit')
            ->add('vscpunittype', EntityType::class, array(
              'class'    => 'AppBundle:VSCPType',
              'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.vscptype', 'ASC');
              },
              'choice_label' => 'vscptype',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('vscpunitDescription')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\VSCPUnit'
        ));
    }
}