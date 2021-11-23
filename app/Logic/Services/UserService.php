<?php

namespace App\Logic\Services;

use App\Logic\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUsers()
    {
        return $this->userRepository->getAll();        
    }

    public function showUser($userId)
    {
        return $this->getRequestedUser($userId);
    }

    public function createUser($request)
    {
        $data = $request->validated();

        return $this->userRepository->create($data);
    }

    public function updateUser($userId, $request)
    {
        $data = $request->validated();

        $user = $this->getRequestedUser($userId);

        $this->userRepository->update($user,$data);

        return $user;
    }

    public function delete($userId)
    {
        return $this->userRepository->delete($userId);
    }

    private function getRequestedUser($userId)
    {
        return $this->userRepository->getById($userId);
    }

}
