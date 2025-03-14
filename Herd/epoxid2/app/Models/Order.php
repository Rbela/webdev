<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'order_number'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


