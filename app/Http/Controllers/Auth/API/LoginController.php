<?php

namespace App\Http\Controllers\Auth\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Traits\ApiResponser;

class LoginController extends Controller
{
    use ApiResponser;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::guard('applicant')->attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::guard('applicant')->user(); 
            $success['token'] =  $user->createToken('auth-token')->plainTextToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'Applicant login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        } 
    }
    
    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        
        return $this->sendResponse(null, 'Applicant logout successfully.');
    }
}
