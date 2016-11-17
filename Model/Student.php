<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/16/16
 * Time: 9:22 AM
 */

namespace Magestore\Student\Model;


class Student implements \Magestore\Student\Api\Data\StudentInterface
{


//    public function __construct(
//        \Magestore\Student\Model\ResourceModel\ManagerStudent\CollectionFactory $collectionFactory,
//        \Magestore\Student\Model\StudentFactory $studentFactory
//    )
//    {
//        $this->collectionFactory = $collectionFactory;
//        $this->studentFactory = $studentFactory;
//    }

    protected function _construct()
    {
        $this->_init('Magestore\Student\Model\ResourceModel\Student');
    }

    public function getId()
    {
        // TODO: Implement getId() method.
        return $this->getData('id');
    }

    public function setId($id)
    {
        // TODO: Implement setId() method.
        $this->setData('id',$id);
        $this->save();
        return $this;
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->setData('name',$name);
        $this->save();
        return $this;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->getData('name');
    }

    public function setClass($class)
    {
        // TODO: Implement setClass() method.
        $this->setData('class',$class);
        $this->save();
        return $this;
    }

    public function getClass()
    {
        // TODO: Implement getClass() method.
        return $this->getData('class');
    }

    public function setUniversity($university)
    {
        // TODO: Implement setUniversity() method.
        $this->setData('university',$university);
        $this->save();
        return $this;
    }

    public function getUniversity()
    {
        // TODO: Implement getUniversity() method.
        return $this->getData('university');
    }
}