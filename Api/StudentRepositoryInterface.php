<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/16/16
 * Time: 9:09 AM
 */

namespace Magestore\Student\Api;


interface StudentRepositoryInterface
{
    /**
     * Lists active student.
     *
     * @return \Magestore\Student\Api\Data\StudentInterface[]
     */
    public function getList();


    /**
     * Create/Update new student with data object values
     *
     * @param \Magestore\Student\Api\Data\StudentInterface $data
     * @param int $studentId
     * @return \Magestore\Student\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException If there is a problem with the input
     * @throws \Magento\Framework\Exception\NoSuchEntityException If a ID is sent but the entity does not exist
     */
    public function save(\Magestore\Student\Api\Data\StudentInterface $data, $storeId = null);


    /**
     * Delete student
     *
     * @param \Magestore\Student\Api\Data\StudentInterface $data
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException If there is a problem with the input
     */
    public function delete(\Magestore\Student\Api\Data\StudentInterface $data);

}