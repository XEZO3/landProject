<?php

namespace App\Http\Controllers;

use App\Models\locations;
use Illuminate\Http\Request;

class locationController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|min:3'
        ]);
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>locations::create($data)
        ];
        return response($response,200);
        
       }

    public function getById($id){
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>locations::find($id)
        ];
        return response($response,200);
    }
    public function index(){
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>locations::all()
        ];
        return response($response,200);
    }
    


}
