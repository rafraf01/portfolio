<?php

namespace App\Http\Controllers;

use Theme;
use App\Project;
class MainController extends Controller
{

    public function index()
    {
        $project_image = Project::all();
        $data = [
            'projects' => $project_image
        ];
        $theme = Theme::uses('default')->layout('default')->setTitle('rvdc');
        return $theme->scope('main.home',$data)->render();
    }
}
