<?php

namespace Conceptive\Christmas\Model\Config\Source;

class ThemePos implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'All Pages', 'label' => __('All Pages')],
            ['value' => 'Homepage', 'label' => __('Homepage')],
            ['value' => 'Cart Page', 'label' => __('Cart Page')],
            ['value' => 'Product Page', 'label' => __('Product Page')],
            ['value' => 'Category Page', 'label' => __('Category Page')]
        ];
    }
}