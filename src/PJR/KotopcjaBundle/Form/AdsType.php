<?php

namespace PJR\KotopcjaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adTitle')
            ->add('adContents')
            ->add('adPictureId')
            ->add('adDate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PJR\KotopcjaBundle\Entity\Ads'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pjr_kotopcjabundle_ads';
    }
}
