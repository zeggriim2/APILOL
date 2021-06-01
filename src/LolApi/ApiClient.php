<?php

namespace LolApi;

use GuzzleHttp\Client;
use LolApi\API\GeneralApi;

class ApiClient {

    /**
     * @var string
     */
    private string $region;
    /**
     * @var string
     */
    private string $apiKey;

    /**
     * @var Client
     */
    private Client $httpClient;


    /**
     * ApiClient constructor.
     * @param string $region
     * @param string $apiKey
     */
    public function __construct(string $region, string $apiKey)
    {
        $this->region = $region;
        $this->apiKey = $apiKey;
        $this->httpClient = new Client();
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getGeneralApi()
    {
        return new GeneralApi($this);
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }
}