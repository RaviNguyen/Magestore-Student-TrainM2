<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/17/16
 * Time: 1:38 PM
 */

namespace Magestore\Student\Model\ResourceModel;


class Student extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
{
    // TODO: Implement _construct() method.
    $this->_init('student','id');
}
}