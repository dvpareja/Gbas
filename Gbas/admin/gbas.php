<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JLoader::register('gbasHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'gbas.php');

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by gbas
$controller = JController::getInstance('gbas');
JFactory::getApplication()->JComponentTitle = "<h1>gbas</h1>";
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
