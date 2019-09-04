<?php
/*************************************************************************************/
/* This file is part of the Thelia package.                                          */
/*                                                                                   */
/* Copyright (c) OpenStudio                                                          */
/* email : dev@thelia.net                                                            */
/* web : http://www.thelia.net                                                       */
/*                                                                                   */
/* For the full copyright and license information, please view the LICENSE.txt       */
/* file that was distributed with this source code.                                  */
/*************************************************************************************/

namespace StripePayment\Model\Config\Base;

/**
 * Class StripePaymentConfigValue
 * @package StripePayment\Model\Config\Base
 */
class StripePaymentConfigValue
{
    const ENABLED = "enabled";
    const STRIPE_ELEMENT = "stripe_element";
    const ONE_CLICK_PAYMENT = "one_click_payment";
    const SECRET_KEY = "secret_key";
    const PUBLISHABLE_KEY = "publishable_key";
    const WEBHOOKS_KEY = "webhooks_key";
    const SECURE_URL = "secure_url";
}

