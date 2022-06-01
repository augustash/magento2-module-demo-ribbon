<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Model;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

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
     * Returns the module's enabled status.
     *
     * @param string $scope
     * @param null|int|string $scopeCode
     * @return bool
     */
    public function isEnabled(
        string $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_ENABLED,
            $scope,
            $scopeCode
        );
    }

    /**
     * Returns the configured ribbon location.
     *
     * @param string $scope
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getLocation(
        string $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): string {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_LOCATION,
            $scope,
            $scopeCode
        );
    }

    /**
     * Returns the configured ribbon size.
     *
     * @param string $scope
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getSize(
        string $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): string {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_SIZE,
            $scope,
            $scopeCode
        );
    }

    /**
     * Returns the configured ribbon message.
     *
     * @param string $scope
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getMessage(
        string $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): string {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_MESSAGE,
            $scope,
            $scopeCode
        );
    }
}
