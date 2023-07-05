<?php

namespace App\Http\Controllers;

use App\Models\place;
use Illuminate\Http\Request;

class placeController extends Controller
{
    public function store(Request $request){
    
        $data = $request->validate([
            'ownerName'=>'required',
            'size'=>'required',
            'price'=>'required',
            'phoneNumber'=>'required',
            'floor'=>'required',
            'rentornot'=>'required',
            'type'=>'required',
            'locations_id'=>'required',
            'streetNumber'=>'required',
            'streetWide'=>'required',
            'floor'=>'required'
        ]);
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>place::create($data)
        ];
        return response($response,200);
       
       }
        public function index(Request $request){
            $lands = place::with(['locations'])->get();
          
            $response = [
                'returnCode'=>200,
                "errorMsg"=>"",
                "result"=>$lands
            ];
            return response($response,200);
        }
        public function getById($id){
            $lands = place::with(['locations'])->find($id);
          
            $response = [
                'returnCode'=>200,
                "errorMsg"=>"",
                "result"=>$lands
            ];
            return response($response,200); 
        }
        public function delete($id){
            $lands = place::destroy($id);
          
            $response = [
                'returnCode'=>200,
                "errorMsg"=>"",
                "result"=>$lands
            ];
            return response($response,200);  
        }
        public function update(place $place,Request $request){
            $data = $request->validate([
                'ownerName'=>'required',
                'size'=>'required',
                'price'=>'required',
                'floor'=>'required',
                'rentornot'=>'required',
                'type'=>'required',
                'phoneNumber'=>'required',
                'locations_id'=>'required',
                'streetNumber'=>'required',
                'streetWide'=>'required',
                'floor'=>'required'
            ]);
            $place->update($data);
            $place->save();
            $response = [
                'returnCode'=>200,
                "errorMsg"=>"",
                "result"=>$place
            ];
            //return response($response,200);
            return $place->type;  
        }
    
}
