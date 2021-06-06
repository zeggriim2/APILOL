<?php

namespace Zeggriim\LolApi\API;


class ChampionApi extends BaseApi {

//    const API_CHAMPIONS_URL = "http://ddragon.leagueoflegends.com/cdn/11.11.1/data/en_US/champion.json";
    const API_CHAMPIONS_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/champion.json";

    public function getAllChampions()
    {

        $this->callApi(self::API_CHAMPIONS_URL);
    }

    private function constructUrl(string $url, array $params)
    {
        foreach($params as $key => $param){

        }
    }
}