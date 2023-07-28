<?php


namespace App\Services;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService {
    public function __construct(protected Category $category) {}

    public function getCategories() : array|Collection {
        return $this->category->orderBy('name')->get();
    }
}
