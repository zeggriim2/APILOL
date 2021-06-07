<?php

namespace Zeggriim\LolApi\API;


class ChampionApi extends BaseApi {

//    const API_CHAMPIONS_URL = "http://ddragon.leagueoflegends.com/cdn/11.11.1/data/en_US/champion.json";
    const API_CHAMPIONS_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/champion.json";

    public function getAllChampions()
    {
        $params = [
            'version'   => $this->apiClient->getVersion(),
            'lang'       => $this->apiClient->getLang()
            ];
        $url = $this->constructUrl(self::API_CHAMPIONS_URL,$params);
        return $this->callApi($url);

    }

    private function constructUrl(string $url, array $params)
    {
        foreach($params as $key => $param){
            $url = str_replace("{{$key}}", $param, $url);
        }
        return $url;
    }
}