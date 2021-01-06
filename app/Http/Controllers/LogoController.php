<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Navbar::all()[0];

        $logo = Logo::all()[0];

        $imgPetit = ImageManagerStatic::make('img/' . $logo->lien)->resize(111,32);
        $imgGrand = ImageManagerStatic::make('img/' . $logo->lien)->resize(504,148);

        $imgPetit->save("img/logoPetit.png",100);
        $imgGrand->save("img/logoGrand.png",100);

        return view('backend.navbar', compact('logo','imgPetit','imgGrand','navbar'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateForm = $request->validate([
            "lien" => "required",
        ]);

        $modifLogo = Logo::all()[0];

        $modifLogo->lien = $request->file('lien')->hashName();

        $modifLogo ->save();
        
        Storage::disk('public')->delete('img/' . $modifLogo->lien);

        $request->file('lien')->storePublicly('img','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
