<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

    protected $table = 'brands';

    static function getBrandsDropdown() {
        return getDropdownList(Brand::get(), 'id', 'brand_name');
    }

}

?>