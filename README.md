# Magento 2 Module - Demo Ribbon

![https://www.augustash.com](http://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png)

**This is a private module and is not currently aimed at public consumption.**

## Overview

The `Augustash_DemoRibbon` module allows a configurable demo message to be shown in a pleasing badge/ribbon on frontend.

## Installation

### Via Local Module

Install the extension files directly into the project source:

```bash
mkdir -p app/code/Augustash/DemoRibbon/
curl -Ss https://github.com/augustash/magento2-module-demo-ribbon/archive/1.2.0.tar.gz | tar xf - --strip 1 -C app/code/Augustash/DemoRibbon/
bin/magento module:enable --clear-static-content Augustash_DemoRibbon
bin/magento setup:upgrade
bin/magento cache:flush
```

### Via Composer

Install the extension using Composer using our development package repository:

```bash
composer config repositories.augustash composer https://packages.augustash.com/repo/private
composer require augustash/module-demo-ribbon:~1.2.0
bin/magento module:enable --clear-static-content Augustash_DemoRibbon
bin/magento setup:upgrade
bin/magento cache:flush
```

## Uninstall

After all dependent modules have also been disabled or uninstalled, you can finally remove this module:

```bash
bin/magento module:disable --clear-static-content Augustash_DemoRibbon
rm -rf app/code/Augustash/DemoRibbon/
composer remove augustash/module-demo-ribbon
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for a Magento 2 module](http://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/module-file-structure.html).
