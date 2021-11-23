<?php 

namespace App\Logic\Auth\Repositories;

use App\Models\User;
use App\Helpers\Json;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginRepository 
{

    public function login(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password)) {
            return Json::sendJsonWith401([
                'message' => 'Bad Credentials',
            ]);
        }

        $token = $user->createToken($user->id . $user->name . $user->email)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response);

        
    }
}