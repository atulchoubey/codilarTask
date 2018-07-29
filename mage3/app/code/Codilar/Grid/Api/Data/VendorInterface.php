<?php

namespace Codilar\Grid\Api\Data;

interface VendorInterface
{


    /**
     * @return int
     */
    public function getEntityId();

    /**
     * @param int $entityId
     * @return $this
     */
    public function setEntityId($entityId);

    /**
     * @return string
     */
    public function getVendor();

    /**
     * @param string  $vendor
     * @return $this
     */
    public function setVendor($vendor);

    /**
     * @return string
     */
    public function getLatitude();

    /**
     * @param string $latitude
     * @return $this
     */
    public function setLatitude($latitude);

    /**
     * @return string
     */
    public function getLongitude();

    /**
     * @param string $longitude
     * @return $this
     */
    public function setLongitude($longitude);

    /**
     * @return boolean
     */
    public function getIsActive();

    /**
     * @param  boolean $isActive
     * @return $this
     */
    public function setIsActive($isActive);


}