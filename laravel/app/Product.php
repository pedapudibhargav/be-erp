<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $name;
    protected $sku;
    protected $weight_of_unit;
    protected $unit_in_stock;
}
