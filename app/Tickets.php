<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'games', 'ticketno', 'created_by','updated_by'
    ];
}
