<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Order extends Model
{
    Public static function getOrder()
    {
        $records =DB::table('orders')->select("total_price","date","user_id")->orderBy('id','asc')->get()->toArray();
        return $records;
    }
}
