<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', 'text')
//            ->add('type', 'string')
//             ->add('company', 'string')
//             ->add('logo', 'string')
//             ->add('url', 'string')
//             ->add('position', 'string')
//             ->add('location', 'string')
//             ->add('desciption', 'text')
//             ->add('how_to_apply', 'text')
//             ->add('token', 'string')
//             ->add('is_public', 'boolean')
//             ->add('is_activated', 'boolean')
//             ->add('email', 'string')
//             ->add('expires_at', 'datetime')
//             ->add('created_at', 'datetime')
//             ->add('updated_at', 'datetime')
       ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(	
            'data_class' => 'AppBundle\Entity\Job'
        ));
    }	
    
    /**
     * Mandatory in Symfony2
     * Gets the unique name of this form.
     * @return string
     */
    public function getName()
    {
    	return 'add_job';
    }
}