<?php

namespace App\Http\Controllers;

use Theme;
use App\Project;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendingEmail;
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

    public function projectList(Request $request)
    {
        $projectList = Project::where('id',$request->segment(2))->first();
        $project_image = Project::all();

        $data = [
            'getProject' =>$projectList,
            'projects' => $project_image
        ];

        $theme = Theme::uses('default')->layout('portfolio')->setTitle('Projects');
        return $theme->scope('project.projects',$data)->render();
    }

    public function redirectToExp()
    {
        $project_image = Project::all();

        $data = [
            'projects' => $project_image
        ];

        $theme = Theme::uses('default')->layout('portfolio')->setTitle('Portfolio');
        return $theme->scope('work.experience',$data)->render();
    }

    public function myTestMail(){
        /*$myEmail = 'rafraf.dc@gmail.com';
        Mail::to($myEmail)->send(new SendingEmail());


        dd("Mail Send Successfully");*/
    }
}
