<?php
/**
 * My own options
 *
 */
namespace Conceptive\Christmas\Model\Config\Source;
class Theme implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'Christmas', 'label' => __('Christmas Theme')],
            ['value' => 'Halloween', 'label' => __('Halloween Theme')]
        ];
    }
}