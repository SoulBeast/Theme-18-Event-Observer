<?php 
namespace Perspective\Theme18OrdersEvent\Observer; 
 
use Magento\Framework\Event\Observer; 
use Magento\Framework\Event\ObserverInterface;
use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Block\Product\View\Description;
 
class AddTabToProduct implements ObserverInterface 
{ 
    public function execute(Observer $observer) 
    { 
        /** @var \Magento\Catalog\Block\Product\View $block */ 
        $block = $observer->getEvent()->getBlock(); 
 
        // Проверяем, что блок - это блок страницы продукта 
        if ($block instanceof \Magento\Catalog\Block\Product\View) { 
            // Добавьте ваш код для добавления вкладки здесь 
            $block->addTab( 
                'your_custom_tab', 
                [ 
                    'label' => 'Your Tab Label', 
                    'title' => 'Your Tab Title', 
                    'content' => 'Content of your custom tab goes here.',
                ] 
            ); 
        } 
    } 
}