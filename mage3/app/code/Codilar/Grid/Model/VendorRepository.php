<?php
/**
 * Created by PhpStorm.
 * User: manish
 * Date: 26/7/18
 * Time: 4:36 PM
 */
namespace Codilar\Grid\Model;
use Codilar\Grid\Api\Data\VendorInterface;
use Codilar\Grid\Api\Data\ProductInterface;
use Codilar\Grid\Api\VendorRepositoryInterface;
use Codilar\Grid\Api\Data\VendorFactory;
use Codilar\Grid\Api\Data\ProductFactory;
class VendorRepository implements VendorRepositoryInterface
{
    /**
     * @var GridFactory
     * @var Vendor $result
     * @return \Codilar\Grid\Model\Data\Vendor
     *
     */
    protected $_postFactory;
    protected $vendorFactory;
    protected $_productCollectionFactory;
    protected $productFactory;
    public function __construct(
        \Codilar\Grid\Model\GridFactory $postFactory,
        \Codilar\Grid\Model\Data\VendorFactory $vendorFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Codilar\Grid\Model\Data\ProductFactory $productFactory
    )
    {
        $this->_postFactory = $postFactory;
        $this->vendorFactory = $vendorFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->productFactory = $productFactory;
    }
    /**
     * @param int $pageSize
     * @param int $pageNumber
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     */
    public function getVendors($pageSize,$pageNumber)
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        $collection->setPageSize($pageSize);
        $collection->setCurPage($pageNumber);
        $vendors = [];
        foreach ($collection as $item) {
            $vendor = $this->vendorFactory->create();
            $vendor->setEntityId($item->getEntityId());
            $vendor->setVendor($item->getvendor());
            $vendor->setLatitude($item->getLatitude());
            $vendor->setLongitude($item->getLongitude());
            $checkState = $item->getIsActive();
            if ($checkState == 0) {
                $vendor->setIsActive(false);
            } else {
                $vendor->setIsActive(true);
            }
            if($checkState == 1){
                $vendors[] = $vendor;
            }
        }
        return $vendors;
    }
    /**
     * @param int $vendorId
     * @return \Codilar\Grid\Api\Data\ProductInterface[]
     */
    public function getProducts($vendorId)
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect(array('name', 'price', 'image'))
            ->addAttributeToFilter('vendor_id',  array('eq' => $vendorId))
            ->load();
        $products=[];
        foreach($collection as $item)
        {
            $product = $this->productFactory->create();
            $product->setName($item->getName());
            $product->setPrice($item->getPrice());
            $product->setImage($item->getImage());
            $products[]=$product;
        }
        return $products;
    }
}