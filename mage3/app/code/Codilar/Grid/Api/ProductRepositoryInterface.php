<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 29/7/18
 * Time: 12:03 PM
 */

interface ProductRepositoryInterface
{
    /**
     * @return \Codilar\Grid\Api\Data\ProductInterface[]
     */
    public function getProducts();
}