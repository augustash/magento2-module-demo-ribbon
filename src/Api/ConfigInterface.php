<?php

/**
 * August Ash Demo Ribbon Module
 *
 * @author Peter McWilliams <pmcwilliams@augustash.com>
 * @license MIT
 */

declare(strict_types=1);

namespace Augustash\DemoRibbon\Api;

use Magento\Store\Model\ScopeInterface;

/**
 * Service interface responsible for module configuration.
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 *
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    public const XML_PATH_RIBBON_ENABLED = 'ash/demo_ribbon/ribbon_enabled';
    public const XML_PATH_RIBBON_LOCATION = 'ash/demo_ribbon/ribbon_location';
    public const XML_PATH_RIBBON_MESSAGE = 'ash/demo_ribbon/ribbon_message';
    public const XML_PATH_RIBBON_SIZE = 'ash/demo_ribbon/ribbon_size';

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
    ): bool;

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
    ): string;

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
    ): ?string;

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
    ): string;
}
