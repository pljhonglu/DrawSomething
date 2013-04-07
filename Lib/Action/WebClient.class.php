<?php
/**
 * WebSocketUser Class
 */
class WebClient {

    public $id = false;

    public $socket = null;

    public $do_handshake = false;//是否已经完成握手协议

    public $ip = null;

    public $lastAction = null;

    public $data = array();

    public function __construct(&$socket) {
        $this->id = uniqid();
        $this->socket = $socket;

        socket_getpeername($socket, $ip);
        $this->ip = $ip;
    }
}