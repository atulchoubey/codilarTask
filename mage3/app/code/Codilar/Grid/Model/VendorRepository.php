<?php
/**
 * Created by PhpStorm.
 * User: manish
 * Date: 26/7/18
 * Time: 4:36 PM
 */

namespace Codilar\Grid\Model;


use Codilar\Grid\Api\Data\VendorInterface;
use Codilar\Grid\Api\VendorRepositoryInterface;
use Codilar\Grid\Api\Data\VendorFactory;

class VendorRepository implements VendorRepositoryInterface
{
    /**
     * @var GridFactory
     * @var Vendor $result
     * @return \Codilar\Grid\Model\Data\Vendor
     *
     */
    protected $_poFactory;
    protected $vendorFactory;

    public function __construct(

        \Codilar\Grid\Model\GridFactory $postFactory,
        \Codilar\Grid\Model\Data\VendorFactory $vendorFactory
    )
    {
        $this->_postFactory = $postFactory;
        $this->vendorFactory= $vendorFactory;

    }

    /**
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     */


    public function getVendors()
    {
        $post = $this->_postFactory->create();
        $collection =$post->getCollection();
        $vendors=[];
        foreach($collection as $item)
        {
            $vendor = $this->vendorFactory->create();
            $vendor->setEntityId($item->getEntityId());
            $vendor->setVendor($item->getvendor());
            $vendor->setLatitude($item->getLatitude());
            $vendor->setLongitude($item->getLongitude());
            $checkState=$item->getIsActive();
            if($checkState==0)
            {
                $vendor->setIsActive(false);
            }
            else
            {
                $vendor->setIsActive(true);
            }
            $vendors[] = $vendor;
        }
        return $vendors;

    }
}