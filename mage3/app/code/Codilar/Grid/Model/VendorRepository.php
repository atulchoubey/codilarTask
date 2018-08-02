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

    protected $_postFactory;
    protected $vendorFactory;

    /**
     * VendorRepository constructor.
     * @param GridFactory $postFactory
     * @param Data\VendorFactory $vendorFactory
     */
    public function __construct(
        \Codilar\Grid\Model\GridFactory $postFactory,
        \Codilar\Grid\Model\Data\VendorFactory $vendorFactory
    )
    {
        $this->_postFactory = $postFactory;
        $this->vendorFactory = $vendorFactory;
    }
    /**
     * @param int $pageSize
     * @param int $pageNumber
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     */
    public function getVendors($pageSize,$pageNumber)
    {
        $post = $this->_postFactory->create();
        $vendors = [];
        $collection = $post->getCollection();
        $collection->setPageSize($pageSize);
        $collection->setCurPage($pageNumber);
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
     * @param int $pageSize
     * @return int
     */
    public function getTotalPages($pageSize)
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        $count = $collection->count();
        return ceil($count/$pageSize);
    }

}

