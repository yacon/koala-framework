<?php
class Kwc_Export_Json_ContentSender extends Kwf_Component_Abstract_ContentSender_Abstract
{
    public function sendContent($includeMaster)
    {
        header('Content-type: json; charset: utf-8');
        echo Zend_Json::encode($this->_data->parent->getComponent()->getExportData());
    }
}
