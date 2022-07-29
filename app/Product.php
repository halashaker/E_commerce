<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    protected $table ='products';
    Public static function getProucts()
    {
        $records =DB::table('products')->select("name","sell_price","total_q","description","color","size","image","brand_id","category_id","user_id","vote_count","vote_average","popularity")->orderBy('id','asc')->get()->toArray();
        return $records;
    }
}
