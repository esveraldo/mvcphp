<?php 

namespace App\Controllers;

use SITE\Controllers\Action;
use SITE\Instances\Instance;

class IndexController extends Action
{
	public function index()
	{
		$clients = Instance::getClass('selectClients');
		$returnClients = $clients->select();
		$this->views->clients = $returnClients;
		$this->render('Index');
	}

	public function contact()
	{
		$this->render('Contact');
	}
}