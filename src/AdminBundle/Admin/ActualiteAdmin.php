<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Admin;

/**
 * Description of ActualiteAdmin
 *
 * @author kooli
 */
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class ActualiteAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', array("label" => 'Titre'));
        $formMapper->add('text', 'text', array("label" => 'Texte'));
        $formMapper->add('imageFile', 'file', array("label" => 'Image'));
        $formMapper->add('zone', 'choice', array(
            'choices' => array(
                "Choisir une région" => null,
                "Aix-en-Provence" => "Aix-en-Provence",
                "Limoges" => "Limoges",
                "Tours" => "Tours",
                "Saint-Denis" => "Saint-Denis",
                "Villeurbanne" => "Villeurbanne",
                "Metz" => "Metz",
                "Besançon" => "Besançon",
                "Caen" => "Caen",
                "Orléans" => "Orléans",
                "Mulhouse" => "Mulhouse",
                "Rouen" => "Rouen",
                "Boulogne-Billancourt" => "Boulogne-Billancourt",
                "Perpignan" => "Perpignan",
                "Nancy" => "Nancy",
                "Roubaix" => "Roubaix",
                "Fort-de-France" => "Fort-de-France",
                "Argenteuil" => "Argenteuil",
                "Tourcoing" => "Tourcoing",
                "Montreuil" => "Montreuil",
                "Saint-Paul" => "Saint-Paul",
                "Avignon" => "Avignon",
                "Saint-Denis" => "Saint-Denis",
                "Versailles" => "Versailles",
                "Nanterre" => "Nanterre",
                "Poitiers" => "Poitiers",
                "Créteil" => "Créteil",
                "Aulnay-sous-Bois" => "Aulnay-sous-Bois",
                "Vitry-sur-Seine" => "Vitry-sur-Seine",
                "Pau" => "Pau",
                "Calais" => "Calais",
                "Colombes" => "Colombes",
                "La Rochelle" => "La Rochelle",
                "Asnières-sur-Seine" => "Asnières-sur-Seine"), "required" => false));
       


           
              $formMapper->add('informationZone', "text",array(
                      "required" => false));
          
     
        
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
