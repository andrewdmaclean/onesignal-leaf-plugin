<?php

namespace OneSignal;

use GuzzleHttp;
use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;

class OneSignal
{
    public $onesignalClient;

    function __construct($rest_api_key, $user_auth_key)
    {
        $config = Configuration::getDefaultConfiguration()
            ->setAppKeyToken($rest_api_key)
            ->setUserKeyToken($user_auth_key);

        $this->onesignalClient = new DefaultApi(
            new GuzzleHttp\Client(),
            $config
        );
    }

    function getOneSignalClient()
    {
        return $this->onesignalClient;
    }
}
