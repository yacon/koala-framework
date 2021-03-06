<?php
class Kwc_Form_ShowText_Component extends Kwc_Form_Field_Abstract
{
    public static function getSettings()
    {
        return array_merge(parent::getSettings(), array(
            'default' => array(
                'value' => ''
            )
        ));
    }

    public function getTemplateVars()
    {
        $return = parent::getTemplateVars();
        $return['value'] = $this->_getRow()->value;
        return $return;
    }
}
