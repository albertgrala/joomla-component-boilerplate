<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.modeladmin');

class BoilerplateModelItem extends JModelAdmin
{
  public function getTable($type = 'Item', $prefix = 'BoilerplateTable', $config = array())
  {
    return JTable::getInstance($type, $prefix, $config);
  }

  protected function loadFormData()
  {
    $data = JFactory::getApplication()->getUserState('com_boilerplate.edit.item.data', array());

    if (empty($data)) {
      $data = $this->getItem();
    }

    return $data;
  }

  public function getForm($data = array(), $loadData = true)
  {
    $form = $this->loadForm('com_boilerplate.item', 'item', array('control' => 'jform', 'load_data' => $loadData));

    return $form;
  }

  public function save($data) {

    return parent::save($data);
  }

}
