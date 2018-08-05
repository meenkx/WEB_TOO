<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class CheckData extends Controller
{
    //
    public function checkCodeProject(Request $request){
        $code = $request->input('CodeNameProject');
        $name = $request->input('NameProject');
        $CodeName = DB::table('projects')
            ->select('CodeName')
            ->where('CodeName', '=', $code)
            ->get();
        $Name = DB::table('projects')
            ->select('name')
            ->where('name', '=', $name)
            ->get();
        $CodeNames = ""; $Names = "";
        foreach ($CodeName as $CodeNamea) {
            $CodeNames = $CodeNamea->CodeName;
        }
        foreach ($Name as $Namea) {
            $Names = $Namea->CodeName;
        }
        if ($CodeName && $Name){
            if(strcmp($CodeNames,$code)==0 || strcmp($Names,$name)==0){
                return Response::json("Code name Duplicate", 404);
            }else{
                return Response::json("Code name is usable", 200);
            }
        }
    }

}
