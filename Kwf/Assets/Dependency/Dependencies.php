<?php
class Kwf_Assets_Dependency_Dependencies extends Kwf_Assets_Dependency_Abstract
{
    protected $_dependencies;
    protected $_name;

    public function __construct(array $dependencies, $name = null)
    {
        $this->_dependencies = $dependencies;
        $this->_name = $name;
    }

    public function getDependencies()
    {
        return $this->_dependencies;
    }

    public function addDependency(Kwf_Assets_Dependency_Abstract $dep)
    {
        $this->_dependencies[] = $dep;
        return $this;
    }

    public function setDependencies(array $dependencies)
    {
        $this->_dependencies = $dependencies;
        return $this;
    }

    public function __toString()
    {
        if ($this->_name) return $this->_name;
        return parent::__toString();
    }
}