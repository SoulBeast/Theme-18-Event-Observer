<?php
namespace Perspective\Theme18FinalPriceEvent\Observer;

class getFinalPrice implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();
        $customPrice = $product->getPrice() * 1.20;
        $product->setFinalPrice($customPrice);
    }
}