<?php

/**
 * August Ash Demo Ribbon
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\DemoRibbon\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Location config source class.
 * @api
 */
class Size implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs.
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
