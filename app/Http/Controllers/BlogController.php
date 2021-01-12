<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Tag;
use Database\Seeders\ArticleSeeder;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $tag = Tag::all();
        $categorie = Categorie::all();
        
        return view ('backend.blog.article',compact('tag','categorie'));
    }
    public function index2()
    {
        return view ('backend.blog.tag');

    }
    public function index3()
    {
        return view ('backend.blog.categorie');

    }
    public function index4()
    {
        $article = Article::all();
        
        return view ('backend.blog.listeArticle',compact('article'));

    }
    public function search()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        $navbar = Navbar::all()[0];
        $commentaire = Commentaire::all();
        $footer = Footer::all()[0];

        $search_text = $_GET['query'];

        $article = Article::where('titre','LIKE','%'. $search_text .'%')->get();

        return view('publique.postSearch', compact('footer','article',"tags",'categories','navbar','commentaire'));

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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $tags = Tag::all();
        $categories = Categorie::all();

        $tableauTags = [];

        foreach ($article->tags as $montag) {
            $tableauTags[] = $montag->id;
        }

        $tableauCat = [];

        foreach ($article->categories as $moncategories) {
            $tableauCat[] = $moncategories->id;
        }
        
        return view('backend.blog.editArticle',compact('article','tags','categories','tableauCat','tableauTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
