<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CronRequest extends Model {

    protected $table = 'cron_requests';
    protected $primaryKey = 'cron_request_id';
    protected $fillable = ['cron_request_id', 'user_id', 'brand_id', 'campaign_id', 'list_id', 'message_type', 'type', 'status', 'created_at', 'updated_at'];

}
