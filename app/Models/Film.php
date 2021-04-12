<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes; 

    protected $table = "film";
    protected $primaryKey = "film_id";
    public $timestamps = false;

    public static $createRules = [
        'title' => 'required',
        'description'=>'required',
        'language_id'=>'required',
        'release_year'=>'required|numeric',
        'rating' => 'required'
    ];

    public static $updateRules = [
        'title' => 'required',
        'description'=>'required',
        'language_id'=>'required',
        // 'release_year'=>'numeric',
        'rating' => 'required'
    ];

    public static $customeMsg = [
        'required' => 'Ruangan :attribute wajib di isi',
        'numeric'=>'Ruangan ini hanya dibenarkan nombor sahaja'
    ];

    protected $fillable = [
        'title',
        'description',
        'language_id',
        'release_year',
        'rating',
    ];

    public function language(){
        return $this->belongsTo('App\Models\Language','language_id');
    }
}
