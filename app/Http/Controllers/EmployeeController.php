<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        $emp = Employee::where('email',$email)->first();

        if($emp AND Hash::check($password, $emp->password)) {
            $api_token = base64_encode(Str::random(40));

            Employee::where('email',  $email)->update([
                'api_token' => $api_token
            ]);
           // return $api_token;
           return response()->json([
            'data'=>[
                'user'=>$emp,
                'api_token' =>$api_token
            ]
           ]);
        }else{
            return "can't access";
        }
   
    }
}
