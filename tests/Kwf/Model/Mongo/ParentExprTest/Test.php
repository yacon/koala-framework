<?php
/**
 * @group Model
 * @group Mongo
 * @group Mongo_ParentExpr
 * @group slow
 */
class Kwf_Model_Mongo_ParentExprTest_Test extends Kwf_Test_TestCase
{
    public function testNoop() {}
/*
    private $_model;
    public function setUp()
    {
        $this->markTestIncomplete(); // TODO: deaktiviert, waren Fehler drinnen
        parent::setUp();

        $this->_model = Kwf_Model_Abstract::getInstance('Kwf_Model_Mongo_ParentExprTest_MongoModel');
        $this->_model->getCollection()->insert(
            array('id'=>100, 'a'=>'a', 'parent_id'=>1, 'parent_name'=>'one') //TODO id sollte nicht nötig sein
        , array('safe'=>true));
    }

    public function tearDown()
    {
        if ($this->_model) $this->_model->cleanUp();
        parent::tearDown();
    }

    public function testInitial()
    {
        $row = $this->_model->getRow(array());
        $this->assertEquals('one', $row->parent_name);
        $this->assertEquals('one', $row->getParentRow('Parent')->name);
    }

    public function testChangedName()
    {
        $parentModel = Kwf_Model_Abstract::getInstance('Kwf_Model_Mongo_ParentExprTest_ParentModel');
        $parentRow = $parentModel->getRow(1);
        $parentRow->name = 'onex';
        $parentRow->save();

        $row = $this->_model->getRow(array());
        $this->assertEquals('onex', $row->parent_name);
        $this->assertEquals('onex', $row->getParentRow('Parent')->name);
        $r = $this->_model->getCollection()->findOne();
        $this->assertEquals('onex', $r['parent_name']);
    }

    public function testNewRow()
    {
        $row = $this->_model->createRow();
        $row->blub = 1;
        $row->parent_id = 1;
        $row->save();

        $this->assertEquals('one', $row->parent_name);
        $r = $this->_model->getCollection()->findOne(array('blub'=>1));
        $this->assertEquals('one', $r['parent_name']);
    }

    public function testChangedParent()
    {
        $row = $this->_model->getRow(array());
        $row->parent_id = 2;
        $row->save();
        $this->assertEquals('two', $row->parent_name);
        $this->assertEquals('two', $row->getParentRow('Parent')->name);
        $r = $this->_model->getCollection()->findOne();
        $this->assertEquals('two', $r['parent_name']);
    }

    public function testDeleteParent()
    {
        $parentModel = Kwf_Model_Abstract::getInstance('Kwf_Model_Mongo_ParentExprTest_ParentModel');
        $parentRow = $parentModel->getRow(1);
        $parentRow->delete();

        $row = $this->_model->getRow(array());
        $this->assertEquals(null, $row->parent_name);
        $this->assertEquals(null, $row->getParentRow('Parent'));
        $r = $this->_model->getCollection()->findOne();
        $this->assertEquals(null, $r['parent_name']);
    }

    public function testUnsetParent()
    {
        $row = $this->_model->getRow(array());
        $row->parent_id = null;
        $row->save();
        $this->assertEquals(null, $row->parent_name);
        $this->assertEquals(null, $row->getParentRow('Parent'));
        $r = $this->_model->getCollection()->findOne();
        $this->assertEquals(null, $r['parent_name']);
    }

    public function testSetParentThatWasNotSet()
    {
        $this->markTestIncomplete();
    }

    public function testWithMultipleRelations()
    {
        $this->markTestIncomplete();
    }
*/
}
