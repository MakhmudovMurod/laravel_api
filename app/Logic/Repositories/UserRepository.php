<?php

namespace App\Logic\Repositories;

use Exception;
use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        return User::all();
    }
    
    public function create(array $data)
    {
        $user = new User;

        $user->fill($data);

        $user->save();

        return $user;
    }
    
    public function getById($userId)
    {
        return User::find($userId);
    }
    
    public function update(User $user, array $data)
    {
        $user->fill($data);

        $user->save();

        return $user;
    }

    public function delete($userId)
    {
        try 
        {
            User::destroy($userId);
        } 
        catch (Exception $e) 
        {
            return false;
        }

        return true;
    }

}