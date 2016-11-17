<?php
/**
 * Created by PhpStorm.
 * User: vinhnguyenducthuy
 * Date: 10/26/16
 * Time: 2:38 PM
 */

namespace Magestore\Student\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table as TypeData;

class InstallSchema implements InstallSchemaInterface
{
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $installer->getConnection()->dropTable(
            $installer->getTable('student')
        );



        $tableStudent = $installer->getConnection()->newTable(
            $installer->getTable('student')
        )->addColumn(
            'id',
            TypeData::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Student ID'
        )->addColumn(
            'class',
            TypeData::TYPE_TEXT,
            40,
            ['nullable' => false, 'default' => ''],
            'Student Class'
        )->addColumn(
            'name',
            TypeData::TYPE_TEXT,
            50,
            ['nullable' => false, 'default' => ''],
            'Student Name'
        )->addColumn(
            'university',
            TypeData::TYPE_TEXT,
            50,
            ['nullable' => false, 'default' => ''],
            'Student University'
        );

        $installer->getConnection()->createTable($tableStudent);

        $installer->endSetup();
    }
}