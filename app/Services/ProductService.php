<?php


namespace App\Services;

use App\Models\Product;
use App\Traits\FileTrait;
use App\Enums\UtilsEnum;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService {
    use FileTrait;

    public function __construct(protected Product $product) {}

    public function addProduct($data) : Product {
        $data['image'] = $this->uploadFile('images/products/',$data['image']);
        $data['added_by'] = auth()->id();
        return $this->product->create($data);
    }

    public function getProduct($product) : Product {
        return $product->load('category');
    }

    public function getAllProducts() : LengthAwarePaginator {
        return $this->product->with('category')->latest('id')->paginate(UtilsEnum::PAGINATE);
    }
}
