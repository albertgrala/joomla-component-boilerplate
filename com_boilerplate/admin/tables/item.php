<?php
defined( '_JEXEC' ) or die;

class BoilerplateTableItem extends JTable
{
  public function __construct(&$db)
  {
    parent::__construct('#__items', 'id', $db);
  }

  public function check()
  {
    
    return true;
  }
}