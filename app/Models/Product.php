<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeExpiryWithinDay($query)
    {
        $currentDate = Carbon::now();
        $oneDayFromNow = $currentDate->copy()->addDay();

        return $query->whereBetween('expiry_date', [$currentDate, $oneDayFromNow]);
    }

    public function scopeExpiryWithinMinutes($query, $minutes)
    {
        $currentDate = Carbon::now();
        $minutesFromNow = $currentDate->copy()->addMinutes($minutes);

        return $query->whereBetween('expiry_date', [$currentDate, $minutesFromNow]);
    }

    public function scopeExpiryWithinWeek($query)
    {
        $currentDate = Carbon::now();
        $oneWeekFromNow = $currentDate->copy()->addWeek();

        return $query->whereBetween('expiry_date', [$currentDate, $oneWeekFromNow]);
    }

    public function scopeExpiryThreeMonth($query)
    {
        $currentDate = Carbon::now();
        $threeMonthsFromNow = $currentDate->copy()->addMonths(3);

        return $query->whereBetween('expiry_date', [$currentDate, $threeMonthsFromNow]);
    }
}
