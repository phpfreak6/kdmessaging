<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingMessage extends Model
{
    protected $table = 'incoming_messages';

    protected $fillable = [
        'id',
        'message_id',
        'platform',
        'body',
        'segments',
        'to_phone',
        'from_phone',
        'file_url',
        'account_id',
        'created_at',
        'updated_at'
    ];
}
