<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 11/16/16
 * Time: 8:22 AM
 */

namespace Magestore\Student\Model;


class ManagerStudent extends \Magento\Framework\Model\AbstractModel
{
    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        \Magestore\Student\Model\ResourceModel\ManagerStudent $resource,
        \Magestore\Student\Model\ResourceModel\ManagerStudent\Collection $resourceCollection)
    {
        parent::__construct($context, $registry, $resource, $resourceCollection);
    }
}