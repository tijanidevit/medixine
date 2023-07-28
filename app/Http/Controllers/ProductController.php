<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;

class ProductController extends Controller
{
    public function __construct(protected ProductService $productService,protected CategoryService $categoryService) {}

    public function index() : View
    {
        $products = $this->productService->getAllProducts();
        return view('admin.products.index', compact('products'));
    }

    public function create() : View
    {
        $categories = $this->categoryService->getCategories();
        return view('admin.products.create', compact('categories'));
    }

    public function store(AddProductRequest $request): RedirectResponse
    {
        $this->productService->addProduct($request->validated());
        return to_route('product.index')->with('success', 'Product added successfully!');
    }

    public function show(Product $product)
    {
        $this->productService->getProduct($product);
        return to_route('product.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
