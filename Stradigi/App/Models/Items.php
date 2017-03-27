<?php

namespace App\Models;

use PDO;

class Items extends \Core\Model
{

    public static function getAllItems()
    {
        $path = __DIR__  . '\panelPageContent.json';
 	$items = file_get_contents($path);
	$json = json_decode($items, true);
	return $json;      
    }
}
