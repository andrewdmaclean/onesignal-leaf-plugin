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

  function viewApps()
  {

    $appArray = [];

    foreach ($this->onesignalClient->getApps() as &$app) {
      array_push($appArray, [$app['name'], $app['id']]);
    }

    return $appArray;
  }




  public static function ping()
  {
    return "Pong!";
  }
}
