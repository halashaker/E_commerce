<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class EmployeeExport implements FromCollection ,WithHeadings
{   
    function headings():array{
     return [
        "name","sell_price","total_q","description","color","size","image","brand_id","category_id","user_id","vote_count","vote_average","popularity"
     ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Product::getProucts());
    }
}
