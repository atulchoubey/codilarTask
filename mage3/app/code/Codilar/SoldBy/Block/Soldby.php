<?php
/**
 * Created by PhpStorm.
 * User: vijay
 * Date: 13/3/18
 * Time: 5:51 PM
 */
namespace Codilar\SoldBy\Block;

use Codilar\Grid\Model\VendorRepository;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Soldby extends Template
{
    /**
     * @var Registry
     */
    private $registry;
    protected $_postFactory;

    /**
     * ImageDescription constructor.
     * @param Template\Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        \Codilar\Grid\Model\GridFactory $postFactory,
        Template\Context $context,
        Registry $registry,
        array $data = []
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context, $data);
        $this->registry = $registry;
    }

    /**
     * @return mixed
     */
    public function getText() {
        /* @var \Magento\Catalog\Model\Product $product */

        
        $product = $this->registry->registry('current_product');
        $post = $this->_postFactory->create()->load($product->getData('vendor_id'));
        return $post->getVendor();

    }
}