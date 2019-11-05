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
class Size implements ArrayInterface
{
    /**
     * Options getter.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'small', 'label' => __('Small')],
            ['value' => 'large', 'label' => __('Large')],
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
            'small' => __('Small'),
            'large' => __('Large'),
        ];
    }
}
