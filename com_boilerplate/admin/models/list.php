<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modellist');

class BoilerplateModelList extends JModelList
{
    public function getItems(){
        
        $items = parent::getItems();

        $db = JFactory::getDbo();
        
        foreach ($items as &$item) {
          // Add customize parametres
        }
        return $items;
    }
    
    public function getListQuery() {
        $query = parent::getListQuery();
        
        $query->select('*');
        $query->from('#__items');
        
        return $query;
    }
    
}