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

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock', 'product_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Order_detail', 'product_id');
    }
}
