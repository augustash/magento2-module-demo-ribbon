# Magento 2 Module - Demo Ribbon

<!-- markdownlint-disable MD033 -->
<div align="center">
    <a href="https://augustash.com" target="_blank">
        <picture>
            <source media="(prefers-color-scheme: dark)" srcset="https://augustash.s3.amazonaws.com/logos/ash-inline-invert-500.png">
            <source media="(prefers-color-scheme: light)" srcset="https://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png">
            <img alt="Shows a theme-dependent version of the AAI company logo." src="https://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png">
        </picture>
    </a>
</div>

<div align="center">
    <img src="https://img.shields.io/badge/magento-2.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
    <a href="https://github.com/augustash/magento2-module-demo-ribbon/graphs/commit-activity" target="_blank">
        <img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" />
    </a>
</div>

## Overview

**This is a private module and is not currently aimed at public usage.**

The `Augustash_DemoRibbon` module displays a configurable demo message to be shown in a pleasing badge/ribbon on frontend.

## Installation

### Via Composer

Install the extension using Composer from our development package repository:

```bash
composer require augustash/module-demo-ribbon
bin/magento module:enable --clear-static-content Augustash_DemoRibbon
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for Magento 2 modules](https://developer.adobe.com/commerce/php/development/build/component-file-structure/).

## License

This module is licensed under the [MIT](LICENSE.md).
