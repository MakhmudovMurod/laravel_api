<?php

namespace App\Logic\Auth\Services;

use App\Logic\Auth\Repositories\RegisterRepository;

class RegisterService
{   
    private $repository;

    public function __construct(RegisterRepository $registerRepository)
    {
        $this->repository = $registerRepository;
        
    }

    public function userRegister($request)
    {   
        $data = $request->validated();

        return $this->repository->register($data);
       
    }
    
}