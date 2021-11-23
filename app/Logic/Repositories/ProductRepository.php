<?php

namespace App\Logic\Repositories;

use Exception;
use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;

class ProductRepository
{
    public function getProducts(array $filters)
    {
        return Product::filter($filters)->pager();
    }

    public function getAll()
    {
        return Product::all();
    }
    
    public function create(array $data)
    {
        $product = new Product;

        $product->fill($data);

        $product->save();

        return $product; 
    }

    public function getById($id)
    {
        return Product::find($id);
    }

    public function update(Product $product, array $data)
    {
        $product->fill($data);

        $product->save();

        return $product;
    }

    public function delete($id)
    {
        try 
        {
            Product::destroy($id);
        } 
        catch (Exception $e) 
        {
            return false;
        }

        return true;
    }
}