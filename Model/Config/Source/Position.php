<?php

namespace Conceptive\Christmas\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'Bottom-Right', 'label' => __('Bottom-Right')],
            ['value' => 'Bottom-Left', 'label' => __('Bottom-Left')],
            ['value' => 'Top-Right', 'label' => __('Top-Right')],
            ['value' => 'Top-Left', 'label' => __('Top-Left')]
        ];
    }
}