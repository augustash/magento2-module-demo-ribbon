<?php

/**
 * August Ash Demo Ribbon Module
 *
 * @author Peter McWilliams <pmcwilliams@augustash.com>
 * @license MIT
 */

declare(strict_types=1);

namespace Augustash\DemoRibbon\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Location implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs.
     *
     * @return mixed[]
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'bottom-left', 'label' => __('Bottom Left')],
            ['value' => 'bottom-right', 'label' => __('Bottom Right')],
            ['value' => 'left', 'label' => __('Top Left')],
            ['value' => 'right', 'label' => __('Top Right')],
        ];
    }

    /**
     * Get options in "key-value" format.
     *
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'bottom-left' => __('Bottom Left'),
            'bottom-right' => __('Bottom Right'),
            'left' => __('Left'),
            'right' => __('Right'),
        ];
    }
}
