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
     * @return \Magento\CheckoutAgreements\Api\Data\AgreementInterface[]
     */
    public function getList();


    /**
     * Create/Update new student with data object values
     *
     * @param \Magento\CheckoutAgreements\Api\Data\AgreementInterface $data
     * @param int $studentId
     * @return \Magento\CheckoutAgreements\Api\Data\AgreementInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException If there is a problem with the input
     * @throws \Magento\Framework\Exception\NoSuchEntityException If a ID is sent but the entity does not exist
     */
    public function save(\Magento\CheckoutAgreements\Api\Data\AgreementInterface $data, $studentId = null);


    /**
     * Delete student
     *
     * @param \Magestore\Student\Api\Data\StudentInterface $data
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException If there is a problem with the input
     */
    public function delete(\Magestore\Student\Api\Data\StudentInterface $data);

}