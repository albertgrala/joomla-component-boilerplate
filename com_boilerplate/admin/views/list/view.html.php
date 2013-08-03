<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class BoilerplateViewList extends JView
{
  protected $items;
  protected $pagination;
  protected $state;

  public function display($tpl = null)
  {

    $this->items = $this->get('Items');
    $this->pagination = $this->get('Pagination');
    $this->state = $this->get('State');

    $this->addToolbar();

    parent::display($tpl);
  }

  public function addToolbar()
  {
    JToolBarHelper::title(JText::_('Boilerplate'));
    
    JToolBarHelper::addNew('item.add');
    JToolBarHelper::editList('item.edit');

    
    JToolBarHelper::divider();

    JToolBarHelper::trash('item.trash');
    JToolBarHelper::deleteList('', 'delegaciones.delete');

    JToolBarHelper::preferences('com_boilerplate');
  }
}