<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 29/7/18
 * Time: 11:46 AM
 */

namespace Codilar\Grid\Api\Data;

interface ProductInterface
{


    /**
     * @return string
     */
    public function getProductName();

    /**
     * @param string $productName
     * @return $this
     */
    public function setProductName($productName);

    /**
     * @return int
     */
    public function getPrice();

    /**
     * @param int $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return string
     */
    public function getImage();

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image);
}