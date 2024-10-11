<?php

namespace Prismasell\Pslider\Block\Widget;

use Magento\Catalog\Block\Product\AbstractProduct;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Catalog\Helper\Image as ImageHelper;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Catalog\Block\Product\Context; // Use the correct Product Context

class Slider extends AbstractProduct implements BlockInterface
{
    protected $_template = "widget/slider.phtml";
    protected $_productCollectionFactory;
    protected $_imageHelper;
    protected $_priceCurrency;

    public function __construct(
        Context $context,  // Use Product Context here
        CollectionFactory $productCollectionFactory,
        ImageHelper $imageHelper,
        PriceCurrencyInterface $priceCurrency,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_imageHelper = $imageHelper;
        $this->_priceCurrency = $priceCurrency;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        $limit = $this->getData('limit');
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('add_to_slider', 1);
        $collection->setPageSize($limit);
        return $collection;
    }

    public function showName()
    {
        return $this->getData('show_name');
    }

    public function showSku()
    {
        return $this->getData('show_sku');
    }

    public function showPrice()
    {
        return $this->getData('show_price');
    }

    public function showReviews()
    {
        return $this->getData('show_reviews');
    }

    public function getFormattedPrice($product)
    {
        return $this->_priceCurrency->format($product->getFinalPrice(), true, 2);
    }

    public function getImageUrl($product)
    {
        return $this->_imageHelper->init($product, 'product_base_image')->getUrl();
    }

    public function getReviewsHtml($product)
    {
        return $this->getReviewsSummaryHtml($product, 'short');
    }
}
