<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * Description of ZoneAdmin
 *
 * @author kooli
 */

class ZoneAdmin extends AbstractAdmin
{
     protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', 'text',array("label"=>'Nom'));
        $formMapper->add('Information', 'text',array("label"=>'Texte'));
       


       
        
        
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name', null, array('name' => 'Is published?'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
         $listMapper ->add('name', null, array('name' => 'Is published?'));
    }

}
