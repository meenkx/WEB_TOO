<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');

        $project = DB::table('projects')->select('CodeName','name', 'location','start_project','end_project','job_value','partner','project_details')->get();

        $project_all = DB::table('projects')->count();
        $project_wait = DB::select(DB::raw('SELECT COUNT(name) as CountName FROM projects WHERE end_project is null'));
        foreach ($project_wait as $project_waita){
            $project_waitaa = $project_waita->CountName;
        }
        $project_success = $project_all - $project_waitaa;

        return view('AdminDashboard.dashboard')
            ->with('count',$project_all)
            ->with('project',$project)
            ->with('project_waitaa',$project_waitaa)
            ;
    }

    public function about(){
        return view('about');
    }

    public function UploadProject(){
        return view('AdminDashboard.UploadProject');
    }

    public function UploadProjects(Request $request){
        $CodeNameProject = $request->input('CodeNameProject');

        $NameProject = $request->input('NameProject');
        $NameLocation = $request->input('NameLocation');
        $StartDateProject = $request->input('StartDateProject');
        $EndDateProject = $request->input('EndDateProject');
        $ValueProject = $request->input('ValueProject');
        $ValueProject2 = $request->input('Value2Project');
        $NamePartner = $request->input('NamePartner');
        $DetailProject = $request->input('DetailProject');

        $data = array();
        $has ="";
        if($request->hasFile('UploadPicProject'))
        {

            $i = 1;
            foreach($request->file('UploadPicProject') as $image)
            {
//                 $name=$image->getClientOriginalName();
                $name=$NameProject.'_'.$i.'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/projects/images/'.$NameProject.'/', $name);
                $data[] = $name;
                $has= implode(",",$data);
                $i++;
            }

        }
//        else{
//            toast('Error Data Not Upload','warning','top-right');
//            return redirect()->route('UploadProject');
//        }
        $ValueProject = $ValueProject.".".$ValueProject2;
        DB::table('projects')->insert(
            [
                'CodeName' => $CodeNameProject,
                'name' => $NameProject,
                'location' => $NameLocation,
                'start_project' => $StartDateProject,
                'end_project' => $EndDateProject,
                'job_value' => $ValueProject,
                'partner' => $NamePartner,
                'project_details' => $DetailProject,
                'image_project' => $has
            ]
        );

//        return back()->with('success', 'Your images has been successfully');
        toast('เพิ่มข้อมูลเสร็จสิ้น','success','top-right');
        return redirect()->route('UploadProject');
    }
    public function EditProjects(Request $request,$ProjectName){

        $CodeNameProject = $request->input('CodeNameProject');
        $NameProject = $request->input('NameProject');
        $NameLocation = $request->input('NameLocation');
        $StartDateProject = $request->input('StartDateProject');
        $EndDateProject = $request->input('EndDateProject');
        $ValueProject = $request->input('ValueProject');
        $ValueProject2 = $request->input('Value2Project');
        $NamePartner = $request->input('NamePartner');
        $DetailProject = $request->input('DetailProject');

        $data = array();
        $has = "";
        $imagegg="";

        $DetailProjectPic = DB::table('projects')
            ->select('image_project')
            ->where('name', '=', $ProjectName)
            ->get();

        foreach ($DetailProjectPic as $DetailProjectPics){
            $imagegg = $DetailProjectPics->image_project;
        }
        if($imagegg!= null || $imagegg!=""){
            $img = explode(",",$imagegg);
            sort($img);
            $number = explode("_",end($img));
            $numbers = explode(".",$number[1]);
        }else{
            $numbers[0] = 0;
        }


        if($request->hasFile('EditPicProject'))
        {
            $i = $numbers[0]+1;
            foreach($request->file('EditPicProject') as $image)
            {
//                 $name=$image->getClientOriginalName();
                $name=$ProjectName.'_'.$i.'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/projects/images/'.$ProjectName.'/', $name);
                $data[] = $name;
//                $has = implode(",",$data);
                $i++;
            }
        }

        if($imagegg == null || $imagegg == ""){
            sort($data);
        }else{
            $data[] = $imagegg;
            sort($data);
        }
        if (count($data)==1){
            $has = implode($data);

        }else{
            $has = implode(",",$data);
        }
        $ValueProject = $ValueProject.".".$ValueProject2;
        DB::table('projects')
            ->where('CodeName', '=', $CodeNameProject)
            ->update([
                    'CodeName' => $CodeNameProject,
                    'name' => $NameProject,
                    'location' => $NameLocation,
                    'start_project' => $StartDateProject,
                    'end_project' => $EndDateProject,
                    'job_value' => $ValueProject,
                    'partner' => $NamePartner,
                    'project_details' => $DetailProject,
                    'image_project' => $has
                ]
            );
        return redirect()->route('DetailProject');
    }

    public function DetailProject(){
        $project = DB::table('projects')->select('CodeName','name', 'location','start_project','end_project','job_value','partner','project_details')->get();
        return view('AdminDashboard.project-edit')->with('project',$project);
    }

    public function DetailProjectName($CodeName){
        $DetailProject = DB::table('projects')
            ->select('CodeName','name','location','start_project','end_project','job_value','partner','project_details')
            ->where('CodeName', '=', $CodeName)
            ->get();
        foreach ($DetailProject as $DetailProjects){
            $money = $DetailProjects->job_value;
            $name = $DetailProjects->name;
        }
        $money = explode(".",$money);
        return view('AdminDashboard.ProjectDetail')
            ->with('name',$name)
            ->with('codename',$CodeName)
            ->with('Detail',$DetailProject)
            ->with('money1',$money[0])
            ->with('money2',$money[1]);
    }

    public function DeleteProjectName($project,$CodeNameProject){
        DB::table('projects')->where('CodeName', '=', $CodeNameProject)->delete();
        $folder = public_path().'/projects/images/'.$project;
        if (file_exists($folder)) {
            File::cleanDirectory( $folder );
            Storage::deleteDirectory( $folder );
            rmdir( $folder );
        }
        toast('ลบ โครงการเรียบร้อยครับ','success','top-right');
        return redirect()->route('DetailProject');
    }




}
