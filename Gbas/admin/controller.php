<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * General Controller of gbas component
 */
class gbasController extends JController
{
    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false) 
    {
        // set default view if not set
        JRequest::setVar('view', JRequest::getCmd('view', 'gbass'));

        // call parent behavior
        parent::display($cachable);

        gbasHelper::addSubmenu('messages');
    }
}