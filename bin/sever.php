<?php
use Ratchet\Server\IoServer;
use App\Controller\ChatsController;

    require dirname(__DIR__) . '/vendor/autoload.php';

    $server = IoServer::factory(
        new ChatsController(),
        8090
    );

    $server->run();