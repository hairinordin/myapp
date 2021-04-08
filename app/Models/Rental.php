<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = "rental";

    public function inventory(){
        return $this->belongsTo('App\Models\Inventory','inventory_id');
    }
}
