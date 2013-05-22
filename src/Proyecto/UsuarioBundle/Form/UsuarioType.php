<?php

namespace Proyecto\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('use_name')
            ->add('use_dependencia')
            ->add('use_phone')
            ->add('use_email')
            ->add('use_login')
            ->add('use_password')
            ->add('use_original')
            ->add('use_rename')
            ->add('use_status')
            ->add('use_type')
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\UsuarioBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'proyecto_usuariobundle_usuariotype';
    }
}
