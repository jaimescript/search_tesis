<?php
namespace Tesis\BuscadorBundle\Form\Editar;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class EditarTesis extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigoTesis','text')
            ->add('autor','text')
            ->add('titulo','text')
            ->add('palabrasClave','text')
            ->add('fechaAceptacion','text')
            ->add('ubicacion','text')
            ->add('grado','text')
            ->add('universidad','text')
            ->add('copyright','text')
            ->add('disciplina','choice')
            //->add('facultad','choice')
            //->add('programa','choice')
            //->add('Guardar Cambios','submit');
            ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'Tesis\BuscadorBundle\Entity\Documento'
        ));
    }
    public function getName()
    {
        return 'tesis';
    }
}