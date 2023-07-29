<?php


namespace App\Services;

use App\Models\Stock;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;

class StockService {

    public function __construct(protected Stock $stock) {}

    public function addStock($data) : Stock {
        $data['batch_no'] = Str::random(2). '-'. rand(1111111,999999);
        $data['added_by'] = auth()->id();
        return $this->stock->create($data);
    }

    public function getStock($stock) : Stock {
        return $stock->load('stocks');
    }

    public function deleteStock($stock) : bool {
        return $stock->delete();
    }

    public function getStockStocks($stock) : Collection {
        return $stock->stocks()->get();
    }

    public function getAllStocks() : Collection {
        return $this->stock->with('product')->latest('id')->get();
    }
}
