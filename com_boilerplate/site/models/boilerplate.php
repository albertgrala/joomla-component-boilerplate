<?php

defined('_JEXEC') or die();
jimport('joomla.application.component.modellist');
class BoilerplateModelBoilerplate extends JModelList
{
  protected $info = array(); 
  
  public function getListQuery()
  {
    $query = parent::getListQuery();
    return $query;
  }

}
?>
