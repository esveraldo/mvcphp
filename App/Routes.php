<?php 

namespace App;

use SITE\Bootstrap\Init;

class Routes extends Init
{
	public function routes()
	{
		$routes['home'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
		$routes['contact'] = array('route' => '/contact', 'controller' => 'IndexController', 'action' => 'contact');

		$this->setRoutes($routes);
	}
}