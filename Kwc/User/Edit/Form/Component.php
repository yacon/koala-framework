<?php
class Kwc_User_Edit_Form_Component extends Kwc_Form_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['placeholder']['submitButton'] = trlKwfStatic('edit account');
        $ret['generators']['child']['component']['success'] = 'Kwc_User_Edit_Form_Success_Component';
        $ret['plugins'] = array('Kwf_Component_Plugin_Login_Component');
        $ret['viewCache'] = false;
        return $ret;
    }

    protected function _initForm()
    {
        parent::_initForm();
        $user = Kwf_Registry::get('userModel')->getAuthedUser();
        if ($user) {
            $this->_form->setId($user->id);
        }

        $this->_initUserForm();
    }

    protected function _initUserForm()
    {
        if (is_instance_of($this->getData()->parent->parent->componentClass, 'Kwc_User_Directory_Component')) {
            $detailClass = Kwc_Abstract::getChildComponentClass(
                        $this->getData()->parent->parent->componentClass, 'detail');
            $forms = Kwc_Abstract::getSetting($this->getData()->parent->componentClass, 'forms');
            $this->_form->addUserForms($detailClass, $forms);
        } else {
            $this->_form->add(new Kwc_User_Detail_General_Form('general', null))
                ->setIdTemplate("{0}");
        }
    }
}
