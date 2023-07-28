<?php


namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class DashboardService {
    public function __construct(protected Product $product) {}

    public function getDashboardData() : array {

    }
}
