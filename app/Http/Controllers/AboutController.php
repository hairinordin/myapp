<?php
namespace App\Http\Controllers;

class AboutController extends Controller{

    public function index(){
        return "Ini page about/index";
    }

    public function say($name,$age=""){
        if(empty($age)){
            $txtage = "";
        }else{
            $txtage = "Umur saya $age tahun";

        }

        return "Hai saya $name, $txtage";
    }

    public function welcome(){
        //cara panggil guna uri
        // return redirect('about/index'); 

        //cara panggil guna name
         return redirect()->route('about-index'); 

        //cara panggil guna controller action
        //return redirect()->action([TestController::class,'index']); 
    }

    public function test_view($name,$umur){
        //return file view 
        // $name = "Ahmad Farid";
        // $umur = "12";

        return view('about_view',[
            'names'=>$name,
            'umur'=>$umur
        ]);
    }



}