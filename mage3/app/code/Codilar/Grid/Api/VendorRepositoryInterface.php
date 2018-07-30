<?php
/**
 * Created by PhpStorm.
 * User: manish
 * Date: 27/7/18
 * Time: 1:28 PM
 */

namespace Codilar\Grid\Api;

interface VendorRepositoryInterface
{
    /**
     * @param int $pageNumber
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     *
     */
    public function getVendors($pageNumber);

    /**
     * Get Product Detail
     * @param int $vendorId
     * @return \Codilar\Grid\Api\Data\ProductInterface[]
     */
    public function getProducts($vendorId);

}