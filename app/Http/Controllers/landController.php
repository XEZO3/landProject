<?php

namespace App\Http\Controllers;

use App\Models\Lands;
use App\Models\locations;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;

use function PHPSTORM_META\map;

class landController extends Controller
{
   public function store(Request $request){
    
    $data = $request->validate([
        'ownerName'=>'required',
        'size'=>'required',
        'price'=>'required',
        'phoneNumber'=>'required',
        'locations_id'=>'required',
        'aquariumNumber'=>'required',
        'partNumber'=>'required',
        'streetNumber'=>'required',
        'streetWide'=>'required'
    ]);
    $response = [
        'returnCode'=>200,
        "errorMsg"=>"",
        "result"=>Lands::create($data)
    ];
    return response($response,200);
   
   }
//    public function search(Request $request){
//     //return locations::where('','LIKE',"%$request->name%")->get();
// }
    public function index(Request $request){
        $lands = lands::with(['locations'])->get();
      
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>$lands
        ];
        return response($response,200);
    }
    public function getById($id){
        $lands = lands::with(['locations'])->find($id);
      
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>$lands
        ];
        return response($response,200); 
    }
    public function delete($id){
        $lands = lands::destroy($id);
      
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>$lands
        ];
        return response($response,200);  
    }
    public function update(Lands $land,Request $request){
        $data = $request->validate([
            'ownerName'=>'required',
            'size'=>'required',
            'price'=>'required',
            'phoneNumber'=>'required',
            'locations_id'=>'required',
            'aquariumNumber'=>'required',
            'partNumber'=>'required',
            'streetNumber'=>'required',
            'streetWide'=>'required'
        ]);
        $land->update($data);
        $land->save();
        $response = [
            'returnCode'=>200,
            "errorMsg"=>"",
            "result"=>$land
        ];
        return response($response,200);  
    }

}
