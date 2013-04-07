<?php
/**
 * handler interface
 * definition of the msg from the client handler
 */

interface HandlerInterface
{
	function handle($sourceUser, $msg, $server);
}