<?php
namespace Codilar\Vendor\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'codilar_vendor_post';

    protected $_cacheTag = 'codilar_vendor_post';

    protected $_eventPrefix = 'codilar_vendor_post';

    protected function _construct()
    {
        $this->_init('Codilar\Vendor\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}