<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scale1',
        'scale2',
        'scale3',
        'scale4',
        'scale5',
        'scale6',
        'scale7',
        'scale8',
        'scale9',
        'scale10',
        'scale11',
        'scale12',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
