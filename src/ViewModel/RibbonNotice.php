<?php

/**
 * August Ash Demo Ribbon Module
 *
 * @author Peter McWilliams <pmcwilliams@augustash.com>
 * @license MIT
 */

declare(strict_types=1);

namespace Augustash\DemoRibbon\ViewModel;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class RibbonNotice implements ArgumentInterface
{
    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Augustash\DemoRibbon\Api\ConfigInterface $config
     */
    public function __construct(
        protected ConfigInterface $config,
    ) {
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
     * Get demo ribbon location.
     *
     * @return string
     */
    public function getDemoLocation(): string
    {
        return $this->config->getLocation();
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
     * Get demo ribbon size.
     *
     * @return string
     */
    public function getDemoSize(): string
    {
        return $this->config->getSize();
    }
}
