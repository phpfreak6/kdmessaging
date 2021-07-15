<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model {

    protected $table = 'campaigns';
    protected $fillable = ['id', 'brand_id', 'campaign_hash', 'campaign_name', 'campaign_channel', 'prefix_brand_code', 'message', 'call_to_action_url', 'created_at', 'updated_at'];

}

?>