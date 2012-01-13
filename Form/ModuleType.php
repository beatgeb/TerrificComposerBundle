<?php

namespace Terrific\ComposerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Module form type.
 */
class ModuleType extends AbstractType
{
    /**
     * Builds the module form.
     *
     * @param \Symfony\Component\Form\FormBuilder $builder
     * @param array $options
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text');
        $builder->add('style', 'choice', array(
            'choices' => array('css' => 'CSS', 'less' => 'LESS'),
            'preferred_choices' => array('less'),
        ));
        $builder->add('author', 'text');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'module';
    }
}

