<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Items;

class Panel extends \Core\Controller
{

    public function indexAction()
    {			
        $items = Items ::getAllItems();
        View::render('Panel/index.php',['items' => $items]);
    }
	
	protected function before()
    {
    }


    protected function after()
    {
    }
}
