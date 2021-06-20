<?php

namespace Zeggriim\LolApi\API;


class SummonerApi extends BaseApi {

    const API_SUMMONERS_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/summoner.json";

    public function getAllSummoners()
    {
        $params = [
            'version'   => $this->apiClient->getVersion(),
            'lang'   => $this->apiClient->getLang()
        ];
        $url = $this->constructUrl(self::API_SUMMONERS_URL, $params);
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