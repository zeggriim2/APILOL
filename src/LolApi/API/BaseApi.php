<?php

namespace LolApi\API;

use LolApi\ApiClient;
use function Couchbase\defaultDecoder;

class BaseApi {
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * BaseApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function callApi(string $url, $method = "GET"){
//        $response = $this->apiClient->getHttpClient()->request($method, $url);
        $response = $this->apiClient->getHttpClient()->get($method,$url);
        dd($response);
    }
}