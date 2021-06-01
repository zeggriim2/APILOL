<?php

namespace LolApi\API;

class GeneralApi extends BaseApi {

    const API_URL_SEASON = "http://static.developer.riotgames.com/docs/lol/seasons.json";

    public function getSeason(){
        $this->callApi(self::API_URL_SEASON);
    }
}