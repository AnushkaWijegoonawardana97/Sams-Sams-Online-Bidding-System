<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Auth;


class ProductInspections extends Model
{
    public function isExpiredInspection()
    {
        return Carbon::now()->gte(Carbon::parse($this->inspection_start_time));
    }   
}
