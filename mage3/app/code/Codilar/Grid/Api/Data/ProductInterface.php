<?php
/**
 * Created by PhpStorm.
 * User: manish
 * Date: 29/7/18
 * Time: 11:46 AM
 */

namespace Codilar\Grid\Api\Data;

interface ProductInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return string
     */
    public function getSpecialPrice();

    /**
     * @param string $specilPrice
     * @return $this
     */
    public function setSpecialPrice($specilPrice);

    /**
     * @return string
     */
    public function getImage();

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getProductType();

    /**
     * @param string $type
     * @return $this
     */
    public function setProductType($type);

    /**
     * @return \Codilar\Grid\Api\Data\ProductConfigurationInterface[]
     */
   // public function getConfiguration();

    /**
     * @param \Codilar\Grid\Api\Data\ProductConfigurationInterface[] $configuration
     * @return mixed
     */
   // public function setConfiguration($configuration);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity);
}