<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class BoilerplateViewItem extends JView
{
  protected $item;
  protected $form;

  public function display($tpl = null)
  {
    $this->item = $this->get('Item');
    $this->form = $this->get('Form');

    $this->addToolbar();

    parent::display($tpl);
  }

  public function addToolbar()
  {
    if ($this->item->id) {
      JToolBarHelper::title(JText::_('Edit Item'));
    } else {
      JToolBarHelper::title(JText::_('Add Item'));
    }

    JToolBarHelper::apply('item.apply', 'JTOOLBAR_APPLY');
    JToolBarHelper::save('item.save', 'JTOOLBAR_SAVE');
    JToolBarHelper::save2new('item.save2new', 'JTOOLBAR_SAVE_AND_NEW');
    JToolBarHelper::divider();
    JToolBarHelper::cancel('item.cancel');
  }
}