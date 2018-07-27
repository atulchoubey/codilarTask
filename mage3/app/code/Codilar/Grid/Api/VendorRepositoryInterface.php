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
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     */
    public function getVendors();

}