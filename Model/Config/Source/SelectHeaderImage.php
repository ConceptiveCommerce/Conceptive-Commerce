<?php

namespace Conceptive\Christmas\Model\Config\Source;

class SelectHeaderImage implements \Magento\Framework\Data\OptionSourceInterface
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
        $firstImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header1.png');
        $secondImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header2.png');
        $thirdImgUrl =  $this->template->getViewFileUrl('Conceptive_Christmas::images/Header/header3.png');

        return [
            ['value' => "$firstImgUrl", 'label' => __("<img src=\"$firstImgUrl\" />")],
            ['value' => "$secondImgUrl", 'label' => __("<img src=\"$secondImgUrl\" />")],
            ['value' => "$thirdImgUrl", 'label' => __("<img src=\"$thirdImgUrl\" />")]
        ];
    }
}