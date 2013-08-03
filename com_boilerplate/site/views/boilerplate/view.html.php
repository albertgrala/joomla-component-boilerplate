<?php

defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class BoilerplateViewBoilerplate extends JView{

  protected $items;

  public function display($tpl = null)
  {
    $model = $this->getModel('boilerplate');
    parent::display($tpl);
  }

}