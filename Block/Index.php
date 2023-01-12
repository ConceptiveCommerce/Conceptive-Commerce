<?php

namespace Conceptive\Christmas\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Stdlib\DateTime\DateTime;

class Index extends Template
{

    protected $registry;

    public $helper;

    public $storeManager;

    public $dateTime;

    protected $_timezoneInterface;

    public $request;


    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param array $data
     */

    public function __construct(
        Template\Context $context,
        \Conceptive\Christmas\Helper\Data $helper,
        \Magento\Framework\Registry $registry,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        DateTime $dateTime,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezoneInterface,
        \Magento\Framework\App\Request\Http $request,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
        $this->registry = $registry;
        $this->storeManager = $storeManager;
        $this->dateTime = $dateTime;
        $this->_timezoneInterface = $timezoneInterface;
        $this->request = $request;
    }

    /**
     * @param string $dateTime
     * @return string $dateTime as time zone
    */
    public function getTimeAccordingToTimeZone($dateTime="")
    {
        // for get current time according to time zone
        $today = $this->_timezoneInterface->date()->format('Y-m-d H:i:s');
        // for convert date time according to magento time zone
        $dateTimeAsTimeZone = $this->_timezoneInterface
                                        ->date(new \DateTime($dateTime))
                                        ->format('Y-m-d H:i:s');
        return $dateTimeAsTimeZone;
    }
}
