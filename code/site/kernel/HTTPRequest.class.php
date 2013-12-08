<?php
namespace Kernel;

class HTTPRequest {

	public function getURI() {
		return $_SERVER['REQUEST_URI'];
	}

}
?>
