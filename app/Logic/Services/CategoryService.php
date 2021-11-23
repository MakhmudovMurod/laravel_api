<?php

namespace App\Logic\Services;

use App\Logic\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->getAll();        
    }

    public function showCategory($id)
    {
        return $this->getRequestedCategory($id);
    }

    public function createCategory($request)
    {
        $data = $request->validated();

        return $this->categoryRepository->create($data);
    }
    
    public function updateCategory($id, $request)
    {   
        $data = $request->validated();

        $category = $this->getRequestedCategory($id);

        $this->categoryRepository->update($category, $data);

        return $category;
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->delete($id);
    }

    private function getRequestedCategory($id)
    {
        return $this->categoryRepository->getById($id);
    }
}