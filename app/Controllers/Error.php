<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Error extends BaseController
{
    public function index($responst)
    {
        $responst::view(['home/header', 'home/404', 'home/footer'], ['title' => '404']);
    }
}
