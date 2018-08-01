<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 2:44 PM
 */

namespace Codilar\Grid\Api\Data;


interface ProductConfigurationInterface
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
     * @return \Codilar\Grid\Api\Data\ProductOptionInterface[]
     */
    public function getOption();

    /**
     * @param \Codilar\Grid\Api\Data\ProductOptionInterface[] $option
     * @return $this
     */
    public function setOption($option);
}