<?php
/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2019 August Ash, Inc.
 */
namespace Augustash\DemoRibbon\Api;

use Magento\Store\Model\ScopeInterface;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    const XML_PATH_RIBBON_ENABLED = 'ash/general/ribbon_enabled';
    const XML_PATH_RIBBON_LOCATION = 'ash/general/ribbon_location';
    const XML_PATH_RIBBON_MESSAGE = 'ash/general/ribbon_message';

    /**
     * Returns the module's enabled status.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return bool
     */
    public function isEnabled($scope = ScopeInterface::SCOPE_STORE, $scopeCode = null);

    /**
     * Returns the configured ribbon location.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getLocation($scope = ScopeInterface::SCOPE_STORE, $scopeCode = null);

    /**
     * Returns the configured ribbon message.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getMessage($scope = ScopeInterface::SCOPE_STORE, $scopeCode = null);
}
