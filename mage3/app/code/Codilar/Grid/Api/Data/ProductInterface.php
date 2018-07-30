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
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

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
    public function getSmallImage();

    /**
     * @param string $image
     * @return $this
     */
    public function setSmallImage($image);
}