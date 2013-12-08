<?php
namespace Kernel;

class Router {

	private $_stub_route = "<route url='/' module='accueil'  />";
	private $_routes = array();

	public function __construct() {
		$this->getRoutes();
	}
	
	public function getModule($url) {
		foreach($_routes as $route) {
			if($route->url == $url ) {
				return $route->module;
			} else {
				//return "404";
			}
		}
	}
	
	private function getRoutes() {
		//create a xml parser;
	}
	
	private function addRoute($url,$module) {
		
		$route = new Route();
		$route->setModule($module);
		$route->setUrl($url);
		$this->_routes->append($route);
	}

}
?>