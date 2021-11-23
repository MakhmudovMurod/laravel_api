<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Helpers\Json;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Logic\Auth\Requests\LoginRequest;
use App\Logic\Auth\Requests\RegisterRequest;
use App\Logic\Auth\Services\LoginService;
use App\Logic\Auth\Services\RegisterService;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    private $loginService;
    private $registerService;

    public function __construct(LoginService $loginService, RegisterService $registerService)
    {
        $this->loginService = $loginService;
        $this->registerService = $registerService;
    }


    public function register(RegisterRequest $request) {

        return Json::sendJsonWith200([
            'register' => $this->registerService->userRegister($request),
        ]);

    }

    public function login(LoginRequest $request) {
        
        return Json::sendJsonWith200([
            'message' => 'You are logged in successfully',

            'login' => $this->loginService->userLogin($request),
 
        ]);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return Json::sendJsonWith([
            'message' => 'You are logged out!',
        ]);
    }
}