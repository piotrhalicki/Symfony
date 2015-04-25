<?php

namespace PJR\KotopcjaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessagesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('messageFrom')
            ->add('messageTo')
            ->add('messageContents')
            ->add('messageDate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PJR\KotopcjaBundle\Entity\Messages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pjr_kotopcjabundle_messages';
    }
}
