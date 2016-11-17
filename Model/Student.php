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
    public function __construct(
        \Magestore\Student\Model\ResourceModel\ManagerStudent\CollectionFactory $collectionFactory,
        \Magestore\Student\Model\StudentFactory $studentFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->studentFactory = $studentFactory;
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function setId($id)
    {
        // TODO: Implement setId() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function setClass($class)
    {
        // TODO: Implement setClass() method.
    }

    public function getClass()
    {
        // TODO: Implement getClass() method.
    }

    public function setUniversity($university)
    {
        // TODO: Implement setUniversity() method.
    }

    public function getUniversity()
    {
        // TODO: Implement getUniversity() method.
    }
}