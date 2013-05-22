<?php

namespace Proyecto\CorrespondenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * 
 */
class CorrespondenciaRecibidaInternaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('hora')
            ->add('radicado')
            ->add('alarma')
            ->add('remitente')
            ->add('fecha_doc','date')
            ->add('anexo')
            ->add('serie')
            ->add('archivoDocumento','file',array('required'=>false))
            ->add('renombre_doc')
            ->add('estado')
            ->add('dependencia')
            ->add('administrador')
        ;
    }
    
    /**
     * 
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\CorrespondenciaBundle\Entity\CorrespondenciaRecibidaInterna'
        ));
    }
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return 'proyecto_correspondenciabundle_correspondenciarecibidainternatype';
    }
}
