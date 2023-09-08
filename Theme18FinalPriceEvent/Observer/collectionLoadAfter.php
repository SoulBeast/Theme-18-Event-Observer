<?php
namespace Perspective\Theme18FinalPriceEvent\Observer;

class collectionLoadAfter implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $products = $observer->getCollection();
        foreach( $products as $product )
        {
            $originalPrice = $product->getPrice();
            $customPrice = $originalPrice * 1.20;
            $product->setPrice($customPrice);
            $product->setCustomPrice($customPrice);
            $product->setOriginalCustomPrice($customPrice);
        }
    }
}