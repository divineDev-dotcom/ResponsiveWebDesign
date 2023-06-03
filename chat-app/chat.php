<?php
  $server = new \Swoole\Websocket\Server("127.0.0.1", 8080);
  $server->on("message", function($server, $frame) {
    $message = $frame->data;
    foreach ($server->connections as $client) {
      $server->push($client, $message);
    }
  });
  $server->start();
?>
