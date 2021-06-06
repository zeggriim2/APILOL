<?php

namespace Zeggriim\LolApi\API;


use GuzzleHttp\Client;
use Zeggriim\LolApi\ApiClient;

class BaseApi {

    /**
     * @var Client
     */
    protected Client $httpClient;

    /**
     * BaseApi constructor.
     */
    public function __construct()
    {
        $this->httpClient = new Client();
    }

    protected function callApi(string $url,$queryParameters = [] , $method = "GET"){

    }
}