<?php

namespace Zeggriim\LolApi\API;


class ItemApi extends BaseApi {

    const API_ITEMS_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/item.json";


    public function getAllItems()
    {
        $params = [
            "version"   => $this->apiClient->getVersion(),
            "lang"      => $this->apiClient->getLang()
        ];
        $url = $this->constructUrl(self::API_ITEMS_URL,$params);
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