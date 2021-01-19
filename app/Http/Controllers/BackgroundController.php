<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caroussel = Background::all();
        $titre = Titre::all();

        return view('backend.titre',compact('titre','caroussel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addCaroussel = new Background;

        $addCaroussel->image = $request->file('image')->hashName();

        $this->authorize('webmaster');

        $addCaroussel ->save();
        
        $request->file('image')->storePublicly('img','public');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function show(Background $background)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function edit(Background $background)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modifEdif = Titre::find($id);

        $modifEdif->titre = $request->titre;
        
        $modifEdif->save();

        return redirect()->back();
    }

    public function update2(Request $request,$id)
    {
        $modifCaroussel = Background::find($id);

        $modifCaroussel->image = $request->grandTitre;
        
        $modifCaroussel->save();

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modifCaroussel= Background::find($id);

        $modifCaroussel->delete();
        
        Storage::disk('public')->delete('img/' . $modifCaroussel->image);

        return redirect()->back();
    }
}
