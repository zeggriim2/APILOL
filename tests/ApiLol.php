<?php

use PHPUnit\Framework\TestCase;

class ApiLol extends TestCase{

    
    /**
     * @test
     */
    public function testRequestAllVersionStatusOK(){
        $apiClient = new \LolApi\ApiClient("euw","RGAPI-a3833e05-5304-4f28-862a-9f788de59c5f");
        $response = $apiClient->getGeneralApi()->getVersion();

        $this->assertSame(200, $response->getStatusCode());
    }
}