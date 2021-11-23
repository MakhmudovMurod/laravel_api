<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Helpers\Json;
use Illuminate\Http\JsonResponse;
use App\Logic\Services\CategoryService;
use App\Logic\Requests\CategoryStoreRequest;
use App\Logic\Requests\CategoryUpdateRequest;

class CategoryApiController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return Json::sendJsonWith200([
            'categories' => $this->categoryService->getCategories(),
        ]);
    }

    public function show($id)
    {
        return Json::sendJsonWith200([
            'category' => $this->categoryService->showCategory($id),
        ]);
    }

    public function store(CategoryStoreRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The category created successfully!',

            'category' => $this->categoryService->createCategory($request),
        ]);
    }

    public function update($id,CategoryUpdateRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The category updated successfully!',

            'category' => $this->categoryService->updateCategory($id, $request),
        ]);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);

        if(!$this->categoryService->deleteCategory($id)) 
        {
            return Json::sendJsonWith409([
                'message' => 'Failed to delete category, please try again later!',
            ]);
        }

        return Json::sendJsonWith200([
            'message' => 'The category was successfully deleted!',
        ]);
    }
}
