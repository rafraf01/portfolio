<?php

namespace App\Http\Controllers;

use Theme;
use App\Project;
use Illuminate\Http\Request;
use Mail;
use Response;
use Illuminate\Support\Facades\Input;
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

        $theme = Theme::uses('default')->layout('portfolio')->setTitle('rvdc');
        return $theme->scope('project.projects',$data)->render();
    }

    public function redirectToExp()
    {
        $project_image = Project::all();

        $data = [
            'projects' => $project_image
        ];

        $theme = Theme::uses('default')->layout('portfolio')->setTitle('rvdc');
        return $theme->scope('work.experience',$data)->render();
    }

    public function myTestMail(Request $request){
        $array = $request->all();

        $data = array(
            'name' => $array['firstname'].' '.$array['lastname'],
            'email' => $array['email'],
            'subject' => $array['subject'],
            'messages' =>  $array['message']
        );

        Mail::send('email.email', $data, function ($message) {
            $message->from(Input::get('email'),null);

            $message->to('edummy93@gmail.com')->subject('Web Master');
        });

        return "Your message has been sent successfully";
    }

    public function getDownload(){
        $file = public_path(). "/pdf/rafaeldelacruz.pdf";
        return Response::download($file);
    }
}
