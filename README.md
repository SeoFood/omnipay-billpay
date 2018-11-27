# Omnipay: BillPay

**BillPay driver for the Omnipay PHP payment processing library**


[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.6+. This package implements BillPay support for Omnipay.


This package is still missing a lot of documentation on how to use it.
Not all feature from BillPay are implemented yet. Currently covered are:

- `Preauthorize` as `Gateway::authorize` and `Gateway::purchase`
- `InvoiceCreated` as `Gateway::invoiceCreated`
- `Cancel` as `Gateway::refund`

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply require `league/omnipay` and `seofood/omnipay-billpay` with Composer:

```
composer require league/omnipay seofood/omnipay-billpay
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Out Of Scope

Omnipay does not cover recurring payments or billing agreements, and so those features are not included in this package. Extensions to this gateway are always welcome. 
