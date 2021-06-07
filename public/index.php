<?php

use Zeggriim\LolApi\ApiClient;

define("PATH_RACINE", dirname(__DIR__));
define("APIKEY", "RGAPI-ffc33d4c-b9ba-4436-b0bc-41c94e8d20cb");
define("LANG", "en_US");
define("REGION", "euw1");
define("VERSION", "11.10.1");

require_once PATH_RACINE . DIRECTORY_SEPARATOR . "vendor/autoload.php";

$apiClient = new ApiClient(REGION, APIKEY, LANG, VERSION);

$res = $apiClient->championApi()->getAllChampions();
dd($res);