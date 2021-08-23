<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Product extends Model
{
    //
    public function isExpiredBid()
    {
        return Carbon::now()->gte(Carbon::parse($this->bid_ending_date));
        // return Carbon::now();

    }
}
