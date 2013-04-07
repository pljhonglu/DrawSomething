<?php

error_reporting(E_ALL | E_NOTICE);
require 'WebSocket.class.php';
require 'MyHandler.php';

$web_socket = new WebSocket();

$web_socket->run(new MyHandler());


