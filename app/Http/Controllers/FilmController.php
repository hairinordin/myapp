<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use PDF;

class FilmController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $url_data = $request->query(); // Assign GET data

        $data = Film::where(function ($query) use ($url_data){
            if(!empty($url_data['title'])){
                $query->where('title','=',$url_data['title']);
            }
        })->paginate(10);

//        dd($url_data['title']);



        return view('film.index',[
            'films'=>$data,
            'bil'=>(request()->input('page', 1) - 1) * 10,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = listLanguage();
        $rating = listRating();


        return view('film.create',[
            'language' => $language,
            'rating' => $rating,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,Film::$createRules,Film::$customeMsg);



        // dd('exit');

        if(Film::create($request->all())){
                //berjaya
                return redirect()->route('film.index')
                ->with('success','Berjaya daftar film');
        }else{
            //tak berjaya
            return redirect()->route('film.index')
            ->with('danger','Tidak berjaya di daftar');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $film = Film::find($id);
        return view('film.show',[
            'film'=>$film
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $film = Film::find($id);
        $language = listLanguage();
        $rating = listRating();

        return view('film.edit',[
            'language' => $language,
            'rating' => $rating,
            'film'=> $film
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('update');
        //
        $this->validate($request,Film::$updateRules,Film::$customeMsg);

        $film = Film::find($id);

        if($film->update($request->all())){
            //berjaya
            return redirect()->route('film.index')
            ->with('success','Berjaya kemaskini film');
        }else{
            //tak berjaya
            return redirect()->route('film.index')
            ->with('danger','Tidak berjaya kemaskini');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        //$filmActor:: FilmActor::where(['film_id','=',$id])->delete();

        $film = Film::find($id);

        if($film->delete()){
            //berjaya
            return redirect()->route('film.index')
            ->with('success','Berjaya delete film');
        }else{
             //tak berjaya
             return redirect()->route('film.index')
             ->with('danger','Tidak berjaya delete');
        }

    }

    public function createPDF(){
        $films = Film::limit(10)->get();

        $pdf = PDF::loadView('film.view_pdf',[
            'films'=>$films
        ]);

        return $pdf->download('list_film.pdf');
    }
}
