<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = "inventory";
    protected $primaryKey = "inventory_id";

    public function film(){
        return $this->belongsTo('App\Models\Film','film_id');

        //$this->hasMany();
    }
}
