<?php
class Kwc_Advanced_SocialBookmarks_TestModel extends Kwc_Advanced_SocialBookmarks_Model
{
    public function __construct(array $config = array())
    {
        $config['proxyModel'] = new Kwf_Model_FnFFile(array(
            'primaryKey' => 'component_id',
            'data' => array(
                array('component_id'=>'root-socialBookmarks'),
            ),
            'uniqueIdentifier' => get_class($this).'-Proxy'
        ));

        $this->_dependentModels['Networks'] = 'Kwc_Advanced_SocialBookmarks_TestNetworksModel';
        parent::__construct($config);
    }
}
