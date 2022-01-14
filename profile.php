<?php


$access_token = 'K4hg22zZ6Ke6MrxOPwOdArq6HvOZe/bjW1xX/iI01/SuOzGCmpftJAdgUog0hZEwVy4TAYNd0BQmzM6GlISCG4Od4iFpqZS8wXv0TMvkXdNxEULXnNy9/hoXLY4Nd2nZfe9UPkipRjVtChsm4PXEegdB04t89/1O/w1cDnyilFU=';

$userId = 'Ufccef7e5e39ba94e11cdad6566e9c905';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

