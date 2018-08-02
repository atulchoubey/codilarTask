<?php
/**
 * Created by PhpStorm.
 * User: manish
 * Date: 29/7/18
 * Time: 12:24 PM
 */

namespace Codilar\Grid\Model\Data;

use Codilar\Grid\Api\Data\ProductInterface;



class Product implements ProductInterface
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
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


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url=$url;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setProductType($type)
    {
        $this->type=$type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @param string $specilPrice
     * @return $this
     */
    public function setSpecialPrice($specilPrice)
    {
        $this->specialPrice=$specilPrice;
        return $this;
    }

    /**
     * @return \Codilar\Grid\Api\Data\ProductConfigurationInterface[]
     */
  /*  public function getConfiguration()
    {
        return $this->configuration;
    }*/

    /**
     * @param \Codilar\Grid\Api\Data\ProductConfigurationInterface[] $configuration
     * @return mixed
     */
    /*public function setConfiguration($configuration)
    {
        $this->configuration=$configuration;
        return $this;
    }*/

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
        return $this;
    }
}