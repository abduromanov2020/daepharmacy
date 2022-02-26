<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recapitulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'user_id',
        'item',
        'total_item',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
