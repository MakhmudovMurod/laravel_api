<?php

namespace App\Logic\Repositories;

use Exception;
use App\Models\Category;

class CategoryRepository
{
    public function getAll()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        $category = new Category;

        $category->fill($data);

        $category->save();

        return $category;
    }

    public function getById($id)
    {
        return Category::find($id);
    }

    public function update(Category $category, array $data)
    {
        $category->fill($data);

        $category->save();

        return $category;
    }

    public function delete($id)
    {
        try 
        {
            Category::destroy($id);
        }
        catch(Exception $e)
        {
            return false;
        }

        return true;
    }
}