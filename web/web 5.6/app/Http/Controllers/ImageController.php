<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
    //
    public function DeleteImage($project,$filename,Request $request){
        if(public_path().'/projects/images/'.$project.'/'.$filename){
            unlink(public_path().'/projects/images/'.$project.'/'.$filename);
            $DetailProjectPic = DB::table('projects')
                ->select('image_project')
                ->where('name', '=', $project)
                ->get();
            foreach ($DetailProjectPic as $DetailProjectPics){
                $image = $DetailProjectPics->image_project;
                $image = explode(',',$image);
            };
            sort($image);
            $key = $request->input('key');

            if (($keyy = array_search($key,$image)) !== false) {
                unset($image[$keyy]);
            }

            $image = implode(",",$image);
            DB::table('projects')
                ->where('name', '=', $project)
                ->update(['image_project' => $image]);

            return Response::json("delete $filename complete", 200);
        }
        else{
            return Response::json("File not found", 404);
        }
    }

    public function GetPicProject($CodeName){

        $DetailProject = DB::table('projects')
            ->select('name','image_project')
            ->where('CodeName', '=', $CodeName)
            ->get();
        foreach ($DetailProject as $DetailProjecta){
            $Name = $DetailProjecta->name;
        }
        if(!$DetailProject->isEmpty()){
            foreach ($DetailProject as $DetailProjects){
                $image = $DetailProjects->image_project;
                $image = explode(',',$image);
            };
            $imaggg = [];
            for ($i = 0; $i<count($image)  ; $i++){
                if($image[$i]!=null || $image[$i]!=""){
                    $image[$i] =  "/projects/images/".$Name."/".$image[$i];
                    $imaggg[] = $image[$i];
                }
            }
            return Response::json(['image' => array($imaggg)], 200);
        }else{
            return Response::json("Project name not found", 404);
        }
    }

    public function GetPicCaption($CodeName){
        $DetailProject = DB::table('projects')
            ->select('name','image_project')
            ->where('CodeName', '=', $CodeName)
            ->get();
        if(!$DetailProject->isEmpty()){
            foreach ($DetailProject as $DetailProjects){
                $image = $DetailProjects->image_project;
                $image = explode(',',$image);
            };
            $caption = [];
            for ($i = 0; $i<count($image) ; $i++){
                $caption[] = $image[$i];
            }
//            toast('Delete Picture complete','success','top-right');
            return Response::json(['caption' => array($caption) ], 200);
        }else{
            return Response::json("Project name not found", 404);
        }
    }

    public function test(){
        echo "test";
    }
}
