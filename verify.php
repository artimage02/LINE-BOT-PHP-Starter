<?php
$access_token = 'q9q06pYl87SBup6azoZWERsIrwrMrJEuLTRAdyKQ112aux21/RYTX+HujYqypK8Z6FgFdcF8OBTNl4NaO2qJFlxoNX17z8dx7TW0XnLXdFo1/dhBC8NS3HVg9snydgAtvM6eijz7Sbe28oZgT1ZFEQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEARDER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;