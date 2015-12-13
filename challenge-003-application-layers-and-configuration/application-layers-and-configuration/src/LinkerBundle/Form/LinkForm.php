<?php


namespace LinkerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LinkForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('link', 'url')
            ->add('save', 'submit', array('label' => 'Save'));
    }

    public function getName()
    {
        return "link";
    }
}
