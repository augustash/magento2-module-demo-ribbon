<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Model;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Configuration class.
 */
class Config implements ConfigInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled(
        $scope = ScopeInterface::SCOPE_STORE,
        $scopeCode = null
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_ENABLED,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getLocation(
        $scope = ScopeInterface::SCOPE_STORE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_LOCATION,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(
        $scope = ScopeInterface::SCOPE_STORE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_SIZE,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage(
        $scope = ScopeInterface::SCOPE_STORE,
        $scopeCode = null
    ): string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_MESSAGE,
            $scope,
            $scopeCode
        );
    }
}
