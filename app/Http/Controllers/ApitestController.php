<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apitest;
//use Validator;

class ApitestController extends Controller
{
    public function index(){
   $apitest=Apitest::all();
return response()->json([
 "success" => true,
 "message" => "User List",
 "data" => $apitest
 ]);
    }
    
   
    public function store(Request $request){
    $apitest=$request->all();
$newusers = Apitest::create($apitest);
 return response()->json([
 "success" => true,
 "message" => "User created successfully.",
 "data" => $newusers
 ]);
    }
    
    public function find($user_id){
    $apitest=Apitest::where('user_id', $user_id)->get();
return response()->json([
 "success" => true,
 "message" => "User show successfully.",
  "data" => $apitest
 ]);
    }

    public function update(Request $request){
    $input=$request->all(); 
    $apitest=Apitest::where('user_id', $input['user_id'])->update($input);
return response()->json([
 "success" => true,
 "message" => "User_id ".$input['user_id']." updated successfully."
 ]);
    }   

    public function destroy($user_id){
    $apitest=Apitest::where('user_id', $user_id)->delete();
return response()->json([
 "success" => true,
 "message" => "User_id ".$user_id." deleted successfully."
 ]);
    }       
    
}
