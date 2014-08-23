<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * gbass View
 */
class gbasViewgbass extends JView
{
    /**
     * gbass view display method
     * @return void
     */
    function display($tpl = null) 
    {
        // Get data from the model
        $items = $this->get('Items');
        $pagination = $this->get('Pagination');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        // Assign data to the view
        $this->items = $items;
        $this->pagination = $pagination;

        $this->addToolBar($this->pagination->total);
        // Display the template
        parent::display($tpl);

        $this->setDocument();
    }

    protected function addToolBar($total = null)
    {
        JToolbarHelper::title(JText::_('COM_GBAS_MANAGER_GBASS').
            ($total?' <span style="font-size: 0.5em; vertical-align: middle;">('.$total.')</span>':'')
                        , 'gbas');
        JToolbarHelper::deleteList('','gbas.delete');
        JToolbarHelper::editList('gbas.edit');
        JToolbarHelper::addNew('gbas.add');
    }

    protected function setDocument()
    {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_GBAS_ADMINISTRATION'));
    }
}
?>