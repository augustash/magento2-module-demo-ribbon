<?php
/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2019 August Ash, Inc.
 */
namespace Augustash\DemoRibbon\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Location config source class.
 * @api
 */
class Location implements ArrayInterface
{
    /**
     * Options getter.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'left', 'label' => __('Top Left')],
            ['value' => 'right', 'label' => __('Top Right')],
            ['value' => 'bottom-left', 'label' => __('Bottom Left')],
            ['value' => 'bottom-right', 'label' => __('Bottom Right')],
        ];
    }

    /**
     * Get options in "key-value" format.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'left' => __('Left'),
            'right' => __('Right'),
            'bottom-left' => __('Bottom Left'),
            'bottom-right' => __('Bottom Right'),
        ];
    }
}
