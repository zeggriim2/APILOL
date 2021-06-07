<?php

namespace Zeggriim\LolApi\API;


use GuzzleHttp\Client;
use Zeggriim\LolApi\ApiClient;

class BaseApi {

    /**
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * @var Client
     */
    private Client $httpClient;

    /**
     * BaseApi constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        $this->httpClient = new Client();

    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    protected function callApi(string $url,$queryParameters = [] , $method = "GET")
    {
        $res = $this->getHttpClient()->request($method,$url);
        $request = json_decode($res->getBody()->getContents(),true);
        if (array_key_exists("date", $request)){
            return $request['data'];
        }else{
            return $request;
        }

    }
}