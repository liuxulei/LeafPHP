<?php
/**
 * @author liuxulei
 */

class Application {
	
	public function run(){
		$route = $_GET['a'];
		$this->processRoute($route);
	}
	
	
	public function processRoute($route){
		list($controller, $action) = explode('/', $route);
		require_once 'controller/'.ucfirst($controller).'Controller.php';
		$controller = ucfirst($controller).'Controller';
		$controller = new $controller;
		$action = $action.'Action';
		$controller->$action();
	}
}