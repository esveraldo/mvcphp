<?php 

namespace App;

use SITE\Contracts\InterfaceConnection;
use App\Config;

class Base implements InterfaceConnection
{
	public static function connection()
	{
		$connection = new \PDO(Config::DSN, Config::USER, Config::PASS);
		$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		return $connection;
	}
}