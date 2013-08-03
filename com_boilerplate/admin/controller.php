<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controller');

class BoilerplateController extends JController
{
    protected $default_view = 'list';
    
    public function display($cachable = false, $urlparams = false){
        
        
        parent::display();
        
    }
}