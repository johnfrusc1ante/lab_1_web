<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('lab4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$path = __DIR__ . '/credentials.json';
$client->setAuthConfig($path);