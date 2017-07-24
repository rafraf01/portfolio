<?php

namespace App\Http\Controllers;

use Theme;
class MainController extends Controller
{

    public function index()
    {
        $theme = Theme::uses('default')->layout('default')->setTitle('rvdc');
        return $theme->scope('main.home')->render();
    }
}
