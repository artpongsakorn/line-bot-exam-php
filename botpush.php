<?php



require "vendor/autoload.php";

$access_token = 'K4hg22zZ6Ke6MrxOPwOdArq6HvOZe/bjW1xX/iI01/SuOzGCmpftJAdgUog0hZEwVy4TAYNd0BQmzM6GlISCG4Od4iFpqZS8wXv0TMvkXdNxEULXnNy9/hoXLY4Nd2nZfe9UPkipRjVtChsm4PXEegdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e88fd994584d504cdc8f6014cd4a772a';

$pushID = 'Ufccef7e5e39ba94e11cdad6566e9c905';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







