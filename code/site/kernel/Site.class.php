<?php
namespace Kernel;

class Site {

	private $_httpResponse;
	private $_httpRequest;
	private $_Router;
	
	public function __contruct() {
		$this->_httpRequest = new HTTPRequest($this);
    	$this->_httpResponse = new HTTPResponse($this);
    	$this->_Router = new Router();
	}

}
?>