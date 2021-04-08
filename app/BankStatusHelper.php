<?php
use App\Models\Language;

function listLanguage(){

    $data = Language::pluck('name','language_id');

    // $data = Language::select('name','language_id')->get();
    return $data;
}


function listRating(){
    $data = [
        'G' => 'G',
        'PG' => 'PG',
        'PG-13' => 'PG-13',
        'R' => 'R',
        'NC-17' => 'NC-17'
    ];

    return $data;
}