<?php 

namespace App\Logic\Auth\Services;

use App\Logic\Auth\Requests\LoginRequest;
use App\Logic\Auth\Repositories\LoginRepository;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    private $repository;

    public function __construct(LoginRepository $loginRepository)
    {
        $this->repository = $loginRepository;
    }

    public function userLogin($request)
    {
        $data = $request->validated();
        return $this->repository->login($data);
    }
}

