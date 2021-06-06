<?php

namespace Zeggriim\LolApi\API;


class StatusApi extends BaseApi{

    const API_STATUS = "https://euw1.api.riotgames.com/lol/status/{version}/shard-data";

    public function getStatus($version = "v4")
    {
        $url = str_replace("{version}", $version, self::API_STATUS);

        return $this->callApi($url);

    }
}