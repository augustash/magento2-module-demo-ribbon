<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Api;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    public const XML_PATH_RIBBON_ENABLED = 'ash/general/ribbon_enabled';
    public const XML_PATH_RIBBON_LOCATION = 'ash/general/ribbon_location';
    public const XML_PATH_RIBBON_SIZE = 'ash/general/ribbon_size';
    public const XML_PATH_RIBBON_MESSAGE = 'ash/general/ribbon_message';

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
    ): bool;

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
    ): string;

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
    ): string;

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
    ): string;
}
