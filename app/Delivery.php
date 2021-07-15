<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model {

    protected $table = 'delivery';

    public function brand() {
        return $this->hasOne('App\Brand', 'id', 'brand_id');
    }

    public function campaign() {
        return $this->hasOne('App\Campaign', 'id', 'campaign_id');
    }

}

?>