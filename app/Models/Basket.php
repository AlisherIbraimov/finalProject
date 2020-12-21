<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable=[
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function items(){
        return $this->belongsToMany(Item::class);
    }
    public function user(){
        return $this->belongsTo(ser::class);
    }
}
