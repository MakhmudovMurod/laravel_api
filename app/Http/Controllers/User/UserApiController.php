<?php

namespace App\Http\Controllers\User;

use App\Model\User;
use App\Helpers\Json;
use Illuminate\Http\JsonResponse;
use App\Logic\Services\UserService;
use App\Logic\Requests\UserStoreRequest;
use App\Logic\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function index()
    {
        return Json::sendJsonWith200([
            'users' => $this->userService->getUsers(),
        ]);
    }

    public function show($userId)
    {
        return Json::sendJsonWith200([
            'user' => $this->userService->showUser($userId),
        ]);
    }
    
    public function store(UserStoreRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The user created successfully!',

            'user' => $this->userService->createUser($request),
        ]);
    }

    public function update($userId,UserUpdateRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The user updated successfully!',

            'user' => $this->userService->updateUser($userId, $request)
        ]);
    }

    public function destroy($userId)
    {
        $this->userService->delete($userId);

        if(!$this->userService->delete($userId)) 
        {
            return Json::sendJsonWith409([
                'message' => 'Failed to delete user, please try again later.',
            ]);
        }

        return Json::sendJsonWith200([
            'message' => 'The user was successfully deleted.',
        ]);
    }
}
