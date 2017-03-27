<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Images;

class Gallery extends \Core\Controller
{

    public function indexAction()
    {		
        $result = Images ::getAllImages();
        View::render('Gallery/index.php', [
            'images' => $result
        ]);

    }

    protected function before()
    {
    }


    protected function after()
    {
    }	
}
