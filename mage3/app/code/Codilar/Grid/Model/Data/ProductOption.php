<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 3:00 PM
 */

namespace Codilar\Grid\Model\Data;


use Codilar\Grid\Api\Data\ProductOptionInterface;

class ProductOption implements ProductOptionInterface
{

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label=$label;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value=$value;
        return $this;
    }
}