<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 11:59 AM
 */

namespace Codilar\Grid\Api;


interface ProductRepositoryInterface
{
    /**
     * Get Product Detail
     * @param int $vendorId
     * @return \Codilar\Grid\Api\Data\ProductInterface[]
     */
    public function getProducts($vendorId);
}