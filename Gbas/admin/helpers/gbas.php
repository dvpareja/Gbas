<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * gbas component helper.
 */
abstract class gbasHelper
{
        /**
         * Configure the Linkbar.
         */
        public static function addSubmenu($submenu) 
        {
                JSubMenuHelper::addEntry(JText::_('COM_GBAS_SUBMENU_MESSAGES'),
                                         'index.php?option=com_gbas', $submenu == 'messages');
                JSubMenuHelper::addEntry(JText::_('COM_GBAS_SUBMENU_CATEGORIES'),
                                         'index.php?option=com_categories&view=categories&extension=com_gbas',
                                         $submenu == 'categories');
                // set some global property
                $document = JFactory::getDocument();
                if ($submenu == 'categories') 
                {
                        $document->setTitle(JText::_('COM_GBAS_ADMINISTRATION_CATEGORIES'));
                }
        }
}