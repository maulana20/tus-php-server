<?php

require __DIR__ . '/vendor/autoload.php';

$server = new \TusPhp\Tus\Server('redis');
$server->setUploadDir('/var/www/uploads');
$server->setMaxUploadSize(100000000); // 100MB

$response = $server->serve();
$response->send();

exit(0);
