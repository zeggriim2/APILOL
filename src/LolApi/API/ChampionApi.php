<?php

namespace Zeggriim\LolApi\API;


class ChampionApi extends BaseApi {

    const API_CHAMPIONS_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/champion.json";
    const API_CHAMPION_URL = "http://ddragon.leagueoflegends.com/cdn/{version}/data/{lang}/champion/{champion}.json";
    const API_SKIN_CHAMPION_URL = "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{skin}.jpg";


    public function getAllChampions()
    {
        $params = [
            'version'   => $this->apiClient->getVersion(),
            'lang'       => $this->apiClient->getLang()
            ];
        $url = $this->constructUrl(self::API_CHAMPIONS_URL,$params);
        return $this->callApi($url);

    }

    public function getChampion($nameChampion)
    {
        $params = [
            'version'   => $this->apiClient->getVersion(),
            'lang'      => $this->apiClient->getLang(),
            'champion'  => ucfirst(strtolower($nameChampion))
        ];
        $url = $this->constructUrl(self::API_CHAMPION_URL, $params);
        return $this->callApi($url);
    }

    public function getSkinChampion($id, $nameChampion)
    {
        $params = [
            'skin' => ucfirst(strtolower($nameChampion)). "_" . $id
        ];
        $url = $this->constructUrl(self::API_SKIN_CHAMPION_URL, $params);
        $this->callApi($url);
    }

    private function constructUrl(string $url, array $params)
    {
        foreach($params as $key => $param){
            $url = str_replace("{{$key}}", $param, $url);
        }
        return $url;
    }
}