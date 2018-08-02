<?php
/**
 * Created by PhpStorm.
 * User: bharath
 * Date: 1/8/18
 * Time: 2:46 PM
 */

namespace Codilar\Grid\Api\Data;


interface ProductOptionInterface
{
    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel($label);

    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value);
}