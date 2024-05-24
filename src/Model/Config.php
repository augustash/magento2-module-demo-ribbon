<?php

/**
 * August Ash Demo Ribbon Module
 *
 * @author Peter McWilliams <pmcwilliams@augustash.com>
 * @license MIT
 */

declare(strict_types=1);

namespace Augustash\DemoRibbon\Model;

use Augustash\DemoRibbon\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ConfigInterface
{
    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        protected ScopeConfigInterface $scopeConfig,
    ) {
    }

    /**
     * Returns the module's configured status.
     *
     * @param string $scope
     * @param string|int|null $scopeCode
     * @return bool
     */
    public function isEnabled(
        string $scope = ScopeInterface::SCOPE_STORES,
        string|int|null $scopeCode = null,
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_ENABLED,
            $scope,
            $scopeCode,
        );
    }

    /**
     * Returns the module's configured ribbon location.
     *
     * @param string $scope
     * @param string|int|null $scopeCode
     * @return string
     */
    public function getLocation(
        string $scope = ScopeInterface::SCOPE_STORES,
        string|int|null $scopeCode = null,
    ): string {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_LOCATION,
            $scope,
            $scopeCode,
        );
    }

    /**
     * Returns the module's configured ribbon message.
     *
     * @param string $scope
     * @param string|int|null $scopeCode
     * @return string|null
     */
    public function getMessage(
        string $scope = ScopeInterface::SCOPE_STORES,
        string|int|null $scopeCode = null,
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_MESSAGE,
            $scope,
            $scopeCode,
        );
    }

    /**
     * Returns the module's configured ribbon size.
     *
     * @param string $scope
     * @param string|int|null $scopeCode
     * @return string
     */
    public function getSize(
        string $scope = ScopeInterface::SCOPE_STORES,
        string|int|null $scopeCode = null,
    ): string {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_RIBBON_SIZE,
            $scope,
            $scopeCode,
        );
    }
}
