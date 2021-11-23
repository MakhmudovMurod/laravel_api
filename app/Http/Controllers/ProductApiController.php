<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Helpers\Json;
use Illuminate\Http\JsonResponse;
use App\Logic\Services\ProductService;
use App\Logic\Requests\ProductStoreRequest;
use App\Logic\Requests\ProductUpdateRequest;
use App\Logic\Requests\ProductIndexRequest;
use App\Logic\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    private $productService;

    private $productRepository;
    
    public function __construct(ProductService $productService, ProductRepository $productRepository)
    {
        $this->productService = $productService;

        $this->productRepository = $productRepository;
    }

    public function index(ProductIndexRequest $request)
    {
        return Json::sendJsonWith200([
            'filters' => $this->productService->getAllFilters($request),
            
            'products' => $this->productService->getProducts($this->productRepository->getProducts($this->productService->getOnlyFilters($request))),
        ]);
    }

    public function show($id)
    {
        return Json::sendJsonWith200([
            'product' => $this->productService->showProduct($id),
        ]);
    }
    
    public function store(ProductStoreRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The product created successfully!',

            'product' => $this->productService->createProduct($request),
        ]);
    }

    public function update($id,ProductUpdateRequest $request)
    {
        return Json::sendJsonWith200([
            'message' => 'The product updated successfully!',

            'product' => $this->productService->updateProduct($id, $request),
        ]);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);

        if(!$this->productService->deleteProduct($id)) 
        {
            return Json::sendJsonWith409([
                'message' => 'Failed to delete product, please try again later!',
            ]);
        }

        return Json::sendJsonWith200([
            'message' => 'The product was successfully deleted!',
        ]);
    }
}
