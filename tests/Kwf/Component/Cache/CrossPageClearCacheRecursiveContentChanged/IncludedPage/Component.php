<?php
class Kwf_Component_Cache_CrossPageClearCacheRecursiveContentChanged_IncludedPage_Component extends Kwc_Abstract
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['ownModel'] = 'Kwf_Component_Cache_CrossPageClearCacheRecursiveContentChanged_IncludedPage_Model';
        return $ret;
    }
}
