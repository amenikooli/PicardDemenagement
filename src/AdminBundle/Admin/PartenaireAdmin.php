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
/**
 * Description of PartenaireAdmin
 *
 * @author kooli
 */
class PartenaireAdmin extends AbstractAdmin
{
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', array("label" => 'Titre'));
        $formMapper->add('text', 'text', array("label" => 'Texte'));
        $formMapper->add('imageFile', 'file', array("label" => 'Image'));
       
          
     
        
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title', null, array('name' => 'Is published?'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('title', null, array('name' => 'Is published?'));
    }
}
