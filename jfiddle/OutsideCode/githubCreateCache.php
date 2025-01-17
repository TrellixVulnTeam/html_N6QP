<?php
require_once 'sessionStart.php'; 
// This file is generated by Composer
require_once 'vendor/autoload.php';

$client = new \Github\Client(
    new \Github\HttpClient\CachedHttpClient(array('cache_dir' => '/tmp/github-api-cache'))
);

// Or select directly which cache you want to use
$client = new \Github\HttpClient\CachedHttpClient();
$client->setCache(
    // Built in one, or any cache implementing this interface:
    // Github\HttpClient\Cache\CacheInterface
    new \Github\HttpClient\Cache\FilesystemCache('/tmp/github-api-cache')
);

$client = new \Github\Client($client);