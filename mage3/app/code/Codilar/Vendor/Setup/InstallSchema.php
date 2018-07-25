<?php

namespace Codilar\Vendor\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('vendor_table')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('vendor_table')
            )
                ->addColumn(
                    'vendor_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary'  => true,
                        'unsigned' => true,
                    ],
                    'Vendor ID'
                )
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'Vendor Name'
                )
                ->addColumn(
                    'latitude',
                    \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
                    null,
                    [],
                    'Latitude'
                )
                ->addColumn(
                    'longitude',
                    \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
                    null,
                    [],
                    'Longitude'
                )
                ->addColumn(
                    'enable/disable',
                    \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                    null,
                    [],
                    'Enable/Disable'
                )
                ->setComment('Vendor Table');
            $installer->getConnection()->createTable($table);

//            $installer->getConnection()->addIndex(
//                $installer->getTable('vendor_table'),
//                $setup->getIdxName(
//                    $installer->getTable('vendor_table'),
//                    ['name', 'latitude', 'longitude', 'enable/disable'],
//                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
//                ),
//                ['name', 'latitude', 'longitude', 'enable/disable'],
//                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
//            );
        }
        $installer->endSetup();
    }
}