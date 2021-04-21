<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileUploadController extends Controller
{
    //
    // public function __construct(){
    //     $this->middleware('auth');
    // }


    public function fileUpload(){
        return view('fileUpload');
    }

    public function saveFile(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048'
        ]);

        //dd($request->file->getSize());

        //nak dapatkan nama file
        $filename = $request->file->getClientOriginalName();
        //$filename = "file_".time().".".$request->file->extension();
        
        //nak dapatkan extension file
        //$request->file->extension();

        //nak dpt size file
        //$request->file->getSize();
        $request['file_name'] = $filename;
        $request['extension'] = $request->file->extension();
        $request['file_path'] = "uploads/".$filename;

        // $path = public_path("uploads/$filename");
        // $base64 = base64_encode($path);

        // dd($base64);

        File::create($request->all());

        $request->file->move(public_path('uploads'),$filename);

        return redirect('file-upload')->with('success','Berjaya upload');
        

    }
}
