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

class actualiteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name')
            ->add('dateofcration')
        ->add('text')


        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
            ->add('dateofcration')
            ->add('text')


        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name')
            ->add('dateofcration')
            ->add('text');
    }
}