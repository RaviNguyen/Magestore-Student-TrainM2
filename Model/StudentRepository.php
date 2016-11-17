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
        \Magestore\Student\Model\ResourceModel\Student\CollectionFactory $collectionFactory,
        \Magestore\Student\Model\StudentFactory $studentFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->studentFactory = $studentFactory;
    }

    public function getList()
    {
        // TODO: Implement getList() method.
        $storeId = $this->storeManager->getStore()->getId();
        $collectionFactory = $this->collectionFactory->create();
        $collectionFactory->addStoreFilter($storeId);
        $studentDataObjects = [];
        foreach ($collectionFactory as $studentOb) {
            $studentDataObjects[] = $studentOb;
        }
        return $studentDataObjects;
    }

    public function save(\Magestore\Student\Api\Data\StudentInterface $data, $storeId = null)
    {
        // TODO: Implement save() method.
        $id = $data->getId();

        if ($storeId === null) {
            $storeId = $this->storeManager->getStore()->getId();
        }

        if ($id) {
            $student = $this->collectionFactory->create();
            $this->studentFactory->load($student, $id);
            $data = $student->addData($data->getData());
        }
        $data->setStores([$storeId]);

        try {
            $this->studentFactory->save($data);
        } catch (\Exception $e) {
            throw new \Magento\Framework\Exception\CouldNotSaveException(
                __('Unable to save student %1', $data->getId())
            );
        }
        return $data;
    }

    public function delete(\Magestore\Student\Api\Data\StudentInterface $data)
    {
        // TODO: Implement delete() method.
        try {
            $this->studentFactory->delete($data);
        } catch (\Exception $e) {
            throw new \Magento\Framework\Exception\CouldNotDeleteException(
                __('Unable to remove checkout agreement %1', $data->getId())
            );
        }
        return true;
    }
}