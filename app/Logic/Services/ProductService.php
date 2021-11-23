<?php

namespace App\Logic\Services;

use App\Logic\Repositories\ProductRepository;
use App\Logic\Requests\ProductIndexRequest;
use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;


class ProductService 
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllFilters(ProductIndexRequest $request)
    {
        return [
            'search' => $request->json('search'),

            'name' => $request->json('name'),

            'description' => $request->json('description'),

            'price' => $request->json('price'),
        ];
    }

    public function getOnlyFilters(ProductIndexRequest $request)
    {
        return $request->only('search','name','description','price');
    }

    public function getProducts(Paginator $paginator)
    {
        $paginator->getCollection()->transform(function(Product $product) {
            return [
                'id' => $product->id,

                'user_id' => $product->user_id,

                'user' => $product->user->name,

                'category_id' => $product->category_id,

                'category' => $product->category->name,

                'name' => $product->name,

                'photo' => $product->photo,

                'description' => $product->description,

                'price' => $product->photo,

                'created_at' => $product->created_at,

                'updated_at' => $product->updated_at,
            ];
        });

        return $paginator;
    }

    public function showProduct($id)
    {
        return $this->getRequestedProduct($id);
    }
    
    public function createProduct($request)
    {
        $data = $request->validated();

        return $this->productRepository->create($data);
    }
    
    public function updateProduct($id, $request)
    {
        $data = $request->validated();

        $product = $this->getRequestedProduct($id);

        $this->productRepository->update($product,$data);

        return $product;
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->delete($id);
    }

    private function getRequestedProduct($id)
    {
        return $this->productRepository->getById($id);
    }
}