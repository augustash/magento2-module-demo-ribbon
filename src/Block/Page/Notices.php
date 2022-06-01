<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
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
     * Check if demo store notice should be displayed.
     *
     * @return bool
     */
    public function displayDemoNotice(): bool
    {
        return $this->config->isEnabled();
    }

    /**
     * Get demo ribbon message.
     *
     * @return string
     */
    public function getDemoMessage(): string
    {
        return $this->config->getMessage() ?? 'Demo - No Orders Honored';
    }

    /**
     * Get demo ribbon location.
     *
     * @return string
     */
    public function getDemoLocation(): string
    {
        return $this->config->getLocation();
    }

    /**
     * Get demo ribbon size.
     *
     * @return string
     */
    public function getDemoSize(): string
    {
        return $this->config->getSize();
    }
}
