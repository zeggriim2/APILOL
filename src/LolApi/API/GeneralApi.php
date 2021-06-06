<?php

namespace Zeggriim\LolApi\API;

class GeneralApi extends BaseApi {

    const API_URL_SEASONS = "http://static.developer.riotgames.com/docs/lol/seasons.json";
    const API_URL_QUEUES = "http://static.developer.riotgames.com/docs/lol/queues.json";
    const API_URL_MAPS = "http://static.developer.riotgames.com/docs/lol/maps.json";
    const API_URL_GAMEMODES = "http://static.developer.riotgames.com/docs/lol/gameModes.json";
    const API_URL_GAMETYPES = "http://static.developer.riotgames.com/docs/lol/gameTypes.json";

    const API_URL_VERSIONS = "https://ddragon.leagueoflegends.com/api/versions.json";


    public function getSeason()
    {
        return $this->callApi(self::API_URL_SEASONS);
    }

    public function getQueues()
    {
        return $this->callApi(self::API_URL_QUEUES);
    }

    public function getMaps()
    {
        return $this->callApi(self::API_URL_MAPS);
    }

    public function getsGameModes()
    {
        return $this->callApi(self::API_URL_GAMEMODES);
    }

    public function getsGameTypes()
    {
        return $this->callApi(self::API_URL_GAMETYPES);
    }

    public function getVersions()
    {
        return $this->httpClient->get(self::API_URL_VERSIONS);
    }
}