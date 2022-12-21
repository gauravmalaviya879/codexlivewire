<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\group;

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
            return json_encode(["status" => false,"message"=>"fetch not data"]);
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
        { 
            try{
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
function logout()
{
    if(session()->has('username')){
        session()->flush();
        return redirect('/');
    }
}
function registerApi(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min:6|confirmed',
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
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $data
        ]);
    }catch(\Exception $exception){
       dd($exception->getMessage());
    }
}
function loginApi(Request $request){
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email',
        'password' => 'required|min:6',
    ]);

    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
    try{
        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized']);
        }
        return $this->createNewToken($token);
    }catch(\Exception $exception){
       dd($exception->getMessage());
    }
}
protected function createNewToken($token){
    return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,
        'user' => auth()->user()
    ]);
}
public function userProfile() {
    return response()->json(auth()->user());
}
public function refresh() {
    return $this->createNewToken(auth()->refresh());
}
public function logoutAuth() {
    auth()->logout();
    return response()->json(['message' => 'User successfully loged out']);
}
// 
function groupdata(){
    $grouplist = group::paginate('10');
    return view('groupShow', ['grouplist' => $grouplist]);
}
function groupOfdetail($id){
    $data = group::where('group_id', $id)->first();
    return view('groupInfo', ['data' => $data]);
}
}
