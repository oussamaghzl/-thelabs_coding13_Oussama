<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            "titre" => "required",
            "texte" => "required",

            "date" => "required",
            "image" => "required",
        ]);

        $newArticle = new Article();
        
        $newArticle->titre = $request->titre;
        $newArticle->date = $request->date;
        $newArticle->texte = $request->texte;
        $newArticle->auteur_id = Auth::user()->id;
        $newArticle->image = $request->file('image')->hashName();

        $newArticle->save();

        $newArticle->tags()->syncWithoutDetaching($request->cats);
        $newArticle->categories()->syncWithoutDetaching($request->tabcateg);
        $request->file('image')->storePublicly('img','public');

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateForm = $request->validate([

            "titre" => "required",
            "date" => "required",
            "image" => "required",

        ]);

        $newArticle = Article::find($id);

        $newArticle->titre = $request->titre;
        $newArticle->date = $request->date;
        $newArticle->auteur_id = Auth::user()->id;
        $newArticle->image = $request->file('image')->hashName();

        $newArticle->save();

        $newArticle->tags()->syncWithoutDetaching($request->cats);
        $newArticle->categories()->syncWithoutDetaching($request->tabcateg);

        Storage::disk('public')->delete('img/' . $newArticle->image);

        $request->file('image')->storePublicly('img','public');

        return redirect()->back();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}