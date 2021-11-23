<?php 

namespace App\Logic\Auth\Repositories;

use App\Models\User;
use App\Helpers\Json;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class RegisterRepository
{
  
    public function register(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => bcrypt($data['password'])
        ]);

        $token = $user->createToken($user->id . $user->name . $user->email)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response);

    }

     
}