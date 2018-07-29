<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 29/7/18
 * Time: 12:24 PM
 */

namespace Codilar\Grid\Model\Data;
use Codilar\Grid\Api\Data\ProductInterface;


class Product implements ProductInterface
{

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productname;
    }

    /**
     * @param string $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productname=$productName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price=$price;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image=$image;
        return $this;
    }
}