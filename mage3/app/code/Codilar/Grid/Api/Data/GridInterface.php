<?php

namespace Codilar\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const TITLE = 'vendor';
    const CONTENT = 'latitude';
    const PUBLISH_DATE = 'longitude';
    const IS_ACTIVE = 'is_active';


    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId);

    /**
     * Get Vendor.
     *
     * @return varchar
     *
     *
     */
    public function getVendor();

    /**
     * Set Vendor.
     */
    public function setVendor($vendor);

    /**
     * Get Latitude.
     *
     * @return varchar
     */
    public function getLatitude();

    /**
     * Set Latitude.
     */
    public function setLatitude($latitude);

    /**
     * Get Longitude.
     *
     * @return varchar
     */
    public function getLongitude();

    /**
     * Set Longitude.
     */
    public function setLongitude($longitude);

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive();

    /**
     * Set StartingPrice.
     */
    public function setIsActive($isActive);

  
}