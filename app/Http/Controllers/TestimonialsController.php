<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Testimonials;
use App\Models\User;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testi = Testimonials::all();
        $team = Team::all();
        $user = User::all();
        return view('backend.testimonials' , compact('user','testi','team'));
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

        $validateForm = $request->validate([
            "texte" => "required",
            "team_id" => "required",
        ]);
        
        $addTesti = new Testimonials();

        $addTesti->texte = $request->texte;
        $addTesti->team_id = $request->team_id;

        $this->authorize('webmaster');
        
        $addTesti ->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateForm = $request->validate([
            "texte" => "required",
            "team_id" => "required",

        ]);

        $modifTesti = Testimonials::find($id);

        $modifTesti->texte = $request->texte;
        $modifTesti->team_id = $request->team_id;
        $this->authorize('webmaster');

        $modifTesti ->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delTesti = Testimonials::find($id);
        
        $this->authorize('webmaster');

        $delTesti->delete();

        return redirect()->back();
    }
}
