<?php 
class Route {

    protected $module;
    protected $url;

	
	public function setModule($mod) {
		$this->module = $mod;
	}
	
	public function setUrl($url) {
		$this->url = $url;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
	public function getModule() {
		return $this->module;
	}    

}
?>