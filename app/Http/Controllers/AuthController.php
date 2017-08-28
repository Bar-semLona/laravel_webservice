<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }else{
            $user = DB::table('users')
            ->select('email', 'password')
            ->where('email', $request->input('email'));
    
            if($user->count()) {
                $user = $user->first();
                if(Hash::check($request->input('password'), $user->password)) {
                    return response()->json(['success'=>200]);
                }else{
                    return response()->json(['error'=>401]);
                }
            }else{
                return response()->json(['error'=>404]);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }else{
            $user = new User();
            $user->name      = $request->input('name');
            $user->email     = $request->input('email');
            $user->password  = Hash::make($request->input('password'));
            $user->api_token = str_random(60);
            
            if ($user->save()) {
                return response()->json(['success'=>200]);
            }else{
                return response()->json(['success'=>401]);
            }
        }
    }

}
