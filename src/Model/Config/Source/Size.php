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

class Size implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs.
     *
     * @return mixed[]
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'large', 'label' => __('Large')],
            ['value' => 'small', 'label' => __('Small')],
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
            'large' => __('Large'),
            'small' => __('Small'),
        ];
    }
}
