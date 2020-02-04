<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Block\Page;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Backend\Block\Page\Notices as ParentBlock;
use Magento\Backend\Block\Template\Context;

/**
 * Adminhtml header notices block class.
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
     * @param \Magento\Backend\Block\Template\Context $context
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

    /**
     * Get demo ribbon size.
     *
     * @return string
     */
    public function getDemoSize()
    {
        return $this->config->getSize();
    }
}
