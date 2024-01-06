<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * Admin Login Validation Rules
     * @return object The validator object
     */
    public function login_rules(Request $request)
    {
        // Make and return validation rules
        return Validator::make($request->all(), [
            'email' => 'required|email:filter,rfc',
            'password' => 'required'
        ]);
    }
    /**
     * Process login action
     * @param Request $request - Request object
     *
     * @return Response
     */
    public function login(Request $request)
    {
        
        $validator = $this->login_rules($request);

        // Run validation
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()->messages()
            ], 400);
        }

       

        
        $credentials = $credentials = $request->only('email');
        $credentials['password'] = $request['password'];

        // Attempt admin login
        $attempt = Auth::attempt($credentials);

        $res = [
            'success' => false,
            'message' => 'Invalid Credentials',
        ];
        
        if ($attempt) {
            return ['success' => true, 'message' => "Login Successful"];
        } else {
            return response()->json($res, 400);
        }
    }
    /**
     * Logout admin
     * @return object
     */
    public function logout()
    {
        Auth::logout();

        return redirect('admin/login');
    }
}
