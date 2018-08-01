<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 12:00 PM
 */

namespace Codilar\Grid\Model;

use Codilar\Grid\Api\ProductRepositoryInterface;
use Codilar\Grid\Api\Data\VendorInterface;
use Codilar\Grid\Api\Data\ProductInterface;
use Codilar\Grid\Api\VendorRepositoryInterface;
use Codilar\Grid\Api\Data\VendorFactory;
use Codilar\Grid\Api\Data\ProductFactory;

class ProductRepository implements ProductRepositoryInterface
{

    protected $_postFactory;
    protected $_productCollectionFactory;
    protected $productFactory;
    protected $productConfigrationFactory;
    protected $productOptionFactory;
    protected $_stockItemRepository;

    /**
     * ProductRepository constructor.
     * @param GridFactory $postFactory
     * @param \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
     * @param Data\ProductFactory $productFactory
     */
    public function __construct(
        \Codilar\Grid\Model\GridFactory $postFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository,
        \Codilar\Grid\Model\Data\ProductFactory $productFactory,
        \Codilar\Grid\Model\Data\ProductConfigrationFactory $productConfigrationFactory,
        \Codilar\Grid\Model\Data\ProductOptionFactory $productOptionFactory
    )
    {
        $this->_postFactory = $postFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_stockItemRepository = $stockItemRepository;
        $this->productFactory = $productFactory;
        $this->productConfigrationFactory = $productConfigrationFactory;
        $this->productOptionFactory = $productOptionFactory;

    }

    /**
     * Get Product Detail
     * @param int $vendorId
     * @return \Codilar\Grid\Api\Data\ProductInterface[]
     */
    public function getProducts($vendorId)
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect(array('name', 'price', 'image', 'special_price'))
            ->addAttributeToFilter('vendor_id',  array('eq' => $vendorId))
            ->load();
        $products=[];
        foreach($collection as $item)
        {
            $product = $this->productFactory->create();
            $product->setId($item->getId());
            $product->setName($item->getName());
            $product->setPrice($item->getPrice());
            $product->setSpecialPrice($item->getSpecialPrice());
            $product->setQuantity($this->_stockItemRepository->get($item->getId())->getQty());
            $product->setImage($item->getImage());
            $product->setUrl($item->getProductUrl());
            $product->setProductType($item->getTypeId());
            $products[]=$product;
        }
        return $products;
    }
}