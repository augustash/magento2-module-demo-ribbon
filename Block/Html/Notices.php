<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Block\Html;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Theme\Block\Html\Notices as ParentBlock;

/**
 * HTML page notices block class.
 * @api
 */
class Notices extends ParentBlock
{
    /**
     * @var \Augustash\DemoRibbon\Api\ConfigInterface
     */
    protected $config;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Augustash\DemoRibbon\Api\ConfigInterface $config
     * @param array $data
     */
    public function __construct(
        Context $context,
        ConfigInterface $config,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function displayDemoNotice()
    {
        return $this->config->isEnabled();
    }

    /**
     * Get demo ribbon message.
     *
     * @return string
     */
    public function getDemoMessage()
    {
        return $this->config->getMessage() ?? 'Demo - No Orders Honored';
    }

    /**
     * Get demo ribbon location.
     *
     * @return string
     */
    public function getDemoLocation()
    {
        return $this->config->getLocation();
    }
}
