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
     * @param int $pageSize
     * @param int $pageNumber
     * @return \Codilar\Grid\Api\Data\VendorInterface[]
     */
    public function getVendors($pageSize,$pageNumber);

    /**
     * @param int $pageSize
     * @return int
     */
    public function getTotalPages($pageSize);
}