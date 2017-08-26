<?php 

namespace SITE\Controllers;

class Action
{
	protected $views;
	protected $action;

	public function __construct()
	{
		$this->views = new \stdClass();
	}

	protected function render($action, $layout = true)
	{
		$this->action = $action;
		if($layout == true && is_file('../App/Views/template.phtml')){
			include_once '../App/Views/template.phtml';
		}else{
			$this->content();
		}
	}

	protected function content()
	{
		$class = get_class($this);
		$newClass = strToLower(str_replace('Controller', '', str_replace('App\\Controllers\\', '', $class)));
		return include_once '../App/Views/' . $newClass . '/' . strToLower($this->action) . '.phtml';
	}
}