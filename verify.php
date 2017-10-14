<?php
$access_token = 'RUNy/Sm/RC9sQ82sI4+BGme0GXv8IWpnJlOeR2NVib8+455oyjWzckFF4BDKAT49o8LZ7V3drgASa2nXeCeUk2OmLHjL5n41kLXWNd43tgOz6+p4Q4zXGG6ga3qkecUW/4J4WrtQVzvz/vLWj00+JgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
