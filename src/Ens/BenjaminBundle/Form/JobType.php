<?php

namespace Ens\BenjaminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Ens\BenjaminBundle\Entity\Job;

class JobType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true))
            ->add('company')
            ->add('file', 'file', array('label' => 'Company logo', 'required' => false))
            ->add('how_to_apply', null, array('label' => 'How to apply?'))
            ->add('is_public', null, array('label' => 'Public?'))
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('category')
        ;
    }

    public function getName()
    {
        return 'job';
    }
}
?>