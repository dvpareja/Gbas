<?php 
defined ('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class gbasControllergbass extends JControllerAdmin
{
    public function getModel($name='gbas', $prefix='gbasModel')
    {
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}    