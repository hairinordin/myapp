<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Language;

class TestController extends Controller{

    public function index(){
        return "Ini page test/index";
    }


    public function hello(){
        return "Hello World";
    }

    public function check_db(){
        try{
            DB::connection()->getPdo();
            echo "Connection Successfully: ". DB::connection()->getDatabaseName();

        }catch(\Exception $e){
            echo('Could not connect to the database, error:'.$e);
        }
    }

    public function get_language(){
        $language = DB::table('language')
                // ->select('name')
                // ->where('name','=','english')
                ->where('language_id','=','2')
                ->get();
                //->dump();

        // $sql = "BINARY name = 'english'";
        $languageModel = Language::where('name','=','english')->get();
        $languageByid = Language::find(2);

        dd($languageByid->name); 


        $country = DB::connection('worldx')->table('country')->get();  

        //$language = DB::table('language')->first();
        // dd($language->name); //first


        //print_r()
        //die()
        //var_dump()
        //print()
        //select * from language
    }

    public function get_rental(){

        // $query = "Select * from rental";

        // $data = DB::select($query);

        // dd($data);


        $rental = DB::table('rental')
        ->select('rental_id','film.title','staff.first_name AS staff_name','customer.first_name AS customer_name')
        ->join('inventory','inventory.inventory_id','=','rental.inventory_id')
        ->join('film','film.film_id','=','inventory.film_id')
        ->join('customer','customer.customer_id','=','rental.customer_id')
        ->join('staff','staff.staff_id','=','rental.staff_id')
        ->orderBy('rental_id','DESC')
        ->limit(10)
        ->get();


        foreach($rental as $value){
            // dd($value);
            echo "title:".$value->title.", firstname:".$value->staff_name;
            echo "<br>";
        }

        // dd($rental);
    }

}