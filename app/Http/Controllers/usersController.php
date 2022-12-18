<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class usersController extends Controller 
{
    //

// registration user
 function register(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min:6',
    ]);
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
    try{
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        // Hash::check($pw, $hashed)
        $result = $data->save();
        if($result){
            return redirect('/'); 
        }else{
            return json_encode(["status" => false,"message"=>"fetch not data", "data"=>$result]);
        }
    }catch(\Exception $exception){
       dd($exception->getMessage());
    }
 }
    function cheackLogin(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $data = User::where('email',$request->email)->first();
        if($data == null){
            session()->flash('err', 'user Unvalied');
            return redirect('/'); 
        }
        elseif(Hash::check($request->password,$data['password']))
        { try{

            $request->session()->put('username', $data['name']);
            $request->session()->put('email', $data['email']);
            $request->session()->put('password', $data['password']);
            session()->flash('success', 'user login');
            return redirect('home');

             }catch(\Exception $exception){

            dd($exception->getMessage());

            }
        }else{
            session()->flash('err', 'password wrong');
            return redirect('/');   
        }
     
}

}
