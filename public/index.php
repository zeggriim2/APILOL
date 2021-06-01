<?php
use LolApi\ApiClient;

define("PATH_RACINE", dirname(__DIR__));
define("APIKEY", "RGAPI-3d85f218-1e34-4116-bcc1-e8d16c0b18dc");

require_once PATH_RACINE . DIRECTORY_SEPARATOR . "vendor/autoload.php";


$apiClient = new ApiClient('fr',APIKEY);

$season = $apiClient->getGeneralApi()->getVersion();
dump($season);