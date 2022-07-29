<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExport;
use App\Order;

class OrderController extends Controller
{
    public function Export_into_exel()
    {
        return Excel::download(new OrderExport,'order.csv');
    }

    public function return_next_order()
    {
        $order2 =Order::get();
        $count= $order2->count()+1;
        return $count;

    }
}
