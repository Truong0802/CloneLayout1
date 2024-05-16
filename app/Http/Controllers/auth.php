<?php

namespace App\Http\Controllers;

use App\Services\interface\AuthServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class auth extends Controller
{
    //
    protected $authService;

    public function __construct(AuthServiceInterface $authServiceInterface)
    {
        $this->authService = $authServiceInterface;
    }

    public function register(Request $request)
    {
        try {
             $messages = [
                //
                'email.unique' => "Email already exists!",
                'user_name.unique' => "Username already exists"
            ];
            $validator = Validator::make($request->all(), [
                'phone' => 'required|string|max:10',
                'email' => 'required|string|email|max:255|unique:user_register',
                'user_name' => 'required|string|max:255|unique:user_register',
                'country' => 'required|string|max:255',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])/'
                ]
            ], $messages);

            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                return response()->json(['error' => $errors], 500);
            }

            if($this->authService->register($request->all()))
            {
                return response()->json(['message' => 'Create account success'], 200);
            }
            else
            {
                return response()->json(['error' => 'Create account failed'], 500);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }

}
