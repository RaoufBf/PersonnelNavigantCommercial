<?php
/**
 * Created by PhpStorm.
 * User: roufa
 * Date: 22/08/2017
 * Time: 02:44
 */

namespace backBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class userAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username')
            ->add('email')
            ->add('password')
            ->add('roles')
            ->add('enabled')




        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')
            ->add('email')
            ->add('password')
            ->add('roles')
            ->add('enabled')


        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('username')
            ->add('email')
            ->add('password')
            ->add('roles')
            ->add('enabled');
    }
}