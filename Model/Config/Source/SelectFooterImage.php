<?php

namespace Conceptive\Christmas\Model\Config\Source;

class SelectFooterImage implements \Magento\Framework\Data\OptionSourceInterface
{

    protected $template;

    public function __construct(
        \Magento\Framework\View\Element\Template $template
    )
    {
        $this->template = $template; 
    }

    /**
     * To option array
     */
    public function toOptionArray()
    {
        $firstImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Footer/footer1.png');
        $secondImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Footer/footer2.png');
        $thirdImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Footer/header3.png');

        return [
            ['value' => "$firstImgUrl", 'label' => __("<img src=\"$firstImgUrl\" />")],
            ['value' => "$secondImgUrl", 'label' => __("<img src=\"$secondImgUrl\" />")]
            // ['value' => 3, 'label' => __("<img src=\"$thirdImgUrl\" />")]
        ];
    }
}