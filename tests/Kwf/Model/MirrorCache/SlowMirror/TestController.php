<?php
class Kwf_Model_MirrorCache_SlowMirror_TestController extends Kwf_Controller_Action
{
    public function indexAction()
    {
        $model = Kwf_Model_Abstract::getInstance('Kwf_Model_MirrorCache_SlowMirror_TestModel');
        echo $model->countRows();
        exit;
    }
}
