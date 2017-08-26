<?php 

namespace SITE\Bootstrap;

use App\Config;

class Init
{
	protected $action;
	protected $routes;

	public function __construct()
	{
		$this->routes();
		$this->run($this->url());
	}

	protected function setRoutes($routes)
	{
		$this->routes = $routes;
	}

	protected function run($url)
	{
		array_walk($this->routes, function($route) use($url){
			if($route['route'] == $url){
				$controller = 'App\\Controllers\\' . ucfirst($route['controller']);
				$class = new $controller();
				$action = $route['action'];
				$class->$action();
			}
		});
	}

	protected function url()
	{
		$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		return str_replace(Config::NAME_IN_BROWSER . '/public/', '', $url);
	}

}