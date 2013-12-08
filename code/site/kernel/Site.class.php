<?php
namespace Kernel;

class Site {

	private $_httpResponse;
	private $_httpRequest;
	private $_router;
	
	public function __construct() {
		$this->_httpRequest = new HTTPRequest($this);
    	$this->_httpResponse = new HTTPResponse($this);
    	$this->_router = new Router();
	}
	

	
	
	public function run() {
		
	}
	
	
	public function httpRequest() {
    	return $this->httpRequest;
    }
   
    public function httpResponse() {
    	return $this->httpResponse;
    }
   
	

}
?>