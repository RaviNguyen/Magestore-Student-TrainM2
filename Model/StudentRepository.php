<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/16/16
 * Time: 9:24 AM
 */

namespace Magestore\Student\Model;


class StudentRepository implements \Magestore\Student\Api\StudentRepositoryInterface
{
    public function __construct(
        \Magestore\Student\Model\ResourceModel\ManagerStudent\CollectionFactory $collectionFactory,
        \Magestore\Student\Model\StudentFactory $studentFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->studentFactory = $studentFactory;
    }

    public function getList()
    {
        // TODO: Implement getList() method.
    }

    public function save(\Magento\CheckoutAgreements\Api\Data\AgreementInterface $data, $studentId = null)
    {
        // TODO: Implement save() method.
    }

    public function delete(\Magestore\Student\Api\Data\StudentInterface $data)
    {
        // TODO: Implement delete() method.
    }
}