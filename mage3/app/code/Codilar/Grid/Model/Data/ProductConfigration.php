<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 2:56 PM
 */

namespace Codilar\Grid\Model\Data;


use Codilar\Grid\Api\Data\ProductConfigurationInterface;

class ProductConfigration implements ProductConfigurationInterface
{

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
     * @return \Codilar\Grid\Api\Data\ProductOptionInterface[]
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param \Codilar\Grid\Api\Data\ProductOptionInterface[] $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->option=$option;
        return $this;
    }
}