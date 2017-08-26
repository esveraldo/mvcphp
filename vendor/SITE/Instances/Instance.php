<?php 

namespace SITE\Instances;

use App\Base;

class Instance
{
	public static function getClass($instance)
    {
        $class = '\\App\\Models\\' . ucfirst($instance);
        return new $class(Base::connection());
    }
}