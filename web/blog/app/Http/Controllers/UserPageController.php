<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserPageController extends Controller
{
    //
    protected function main()
    {
        $project_all = DB::table('projects')->count();
        $project_wait = DB::select(DB::raw('SELECT COUNT(name) as CountName FROM projects WHERE end_project is null'));
        foreach ($project_wait as $project_waita){
            $project_waitaa = $project_waita->CountName;
        }
        $project_success = $project_all - $project_waitaa;

        $picproject = DB::table('projects')
            ->select('name', 'CodeName','location','job_value','start_project','end_project','image_project')
            ->having('image_project', '!=', "")
            ->inRandomOrder()
            ->limit(6)
            ->get();

        if($project_all && $project_success && $project_waitaa){
            return view('main')
                ->with('project_all',$project_all)
                ->with('project_success',$project_success)
                ->with('project_waitaa',$project_waitaa)
                ->with('picproject',$picproject)
                ;
        }
    }

    public function UserPageController(){
        $ProfileAll = DB::table('projects')->select('name', 'CodeName','job_value','image_project','start_project','end_project','image_project')->get();
        foreach ($ProfileAll as $ProfileAlla){
            $start = $ProfileAlla->start_project;
            $end = $ProfileAlla->end_project;
        }

        $start = explode("/",$start);
        $start1 = $start[2]-543;
        $start2 = $start[1];
        $start3 = $start[0];
        $start_final = $start1."-".$start2."-".$start3;

        $end = explode("/",$end);
        $end1 = $end[2]-543;
        $end2 = $end[1];
        $end3 = $end[0];
        $end_final = $end1."-".$end2."-".$end3;


        $diff = (int)abs((strtotime($start_final) - strtotime($end_final))/(60*60*24*30));
        return view('suttikan.project.projectmain')->with('ProfileAll',$ProfileAll)->with('duration',$diff);
    }

    public function projectdetail($codename)
    {
//        dd($codename);
        $DetailProject = DB::table('projects')
            ->select('name', 'CodeName','location','start_project','end_project','job_value','partner','project_details','image_project')
            ->where('CodeName', '=', $codename)
            ->get();
        $RelateProject = DB::table('projects')
            ->select('name', 'CodeName','location','image_project')
            ->having('image_project', '!=', "")
            ->inRandomOrder()
            ->limit(4)
            ->get();
        return view('suttikan.project.project-list')->with('detail',$DetailProject)->with('RelateProject',$RelateProject);
    }

    public function HomeService(){
        return view('suttikan.service.HomeServices');
    }

    public function contact(){
        return view('suttikan.contact');
    }
}
