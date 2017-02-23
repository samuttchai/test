<?php
$access_token = 'h/jhekUM16h4Y++D/OszdtEu0HujOpz7okc4fwScY7lEiiBrCaQwmho3iWjm78nqgUy4f9C//tP7me7bbG18PBN9kgqXZUHYGCvLQ60VmsewDrYhbfK+eW5P/ZHo6TYEph7QPTKw7s8ZyGFEun0K9gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
