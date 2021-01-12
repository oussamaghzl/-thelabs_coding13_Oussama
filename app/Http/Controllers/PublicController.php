<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Background;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Icone;
use App\Models\Navbar;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titre;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    public function index()
    {
        $navbar = Navbar::all()[0];
        $contact = Contact::all()[0];
        $caroussel = Background::all();
        $icone = Icone::all();
        $ready = Ready::all()[0];
        $service3card = Service::inRandomOrder()->limit(3)->get();
        $team = Team::inRandomOrder()->limit(3)->get();
        $testi = Testimonials::all();
        $video = Video::all()[0];
        $service = Service::orderByDesc('id')->simplePaginate(9);

        $footer = Footer::all()[0];
        
        $teams = Team::inRandomOrder()->get();
        
        $counter = 0;
        $ok = 1;

        $titre = Titre::all();
        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }
        

        return view('publique.Accueil',compact('footer','ok','teams','counter','service','video','navbar',"contact","caroussel",'tab','icone','ready','service3card','team','testi','video'));
    }
    public function index2()
    {
        $navbar = Navbar::all()[0];
        $commentaire = Commentaire::all();

        $categories =Categorie::all();
        $tags = Tag::all();

        $footer = Footer::all()[0];
        $article = Article::orderByDesc('id')->simplePaginate(3);
        return view('publique.blog' , compact('commentaire',"navbar",'footer','article','categories','tags'));
    }
    public function index3()
    {
        $titre = Titre::all();
        $tab = [];

        foreach($titre as $title){
            $str = Str::of($title->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')','</span>');
            array_push($tab, $str2);
        }


        $service = Service::orderByDesc('id')->paginate(9);



        $article = Article::orderByDesc('id')->limit(3)->get();

        

        $servicepage = Service::orderByDesc('id')->limit(6)->get();
        $limite = 0;
        $footer = Footer::all()[0];
        $navbar = Navbar::all()[0];

        return view('publique.services',compact('article','navbar','footer','service','servicepage','limite','tab'));

    }
    public function index4()
    {
        $footer = Footer::all()[0];
        $navbar = Navbar::all()[0];
        $contact = Contact::all()[0];
        return view('publique.contact', compact('footer','navbar',"contact"));
    }

    public function show($id)
    {
        $navbar = Navbar::all()[0];

        $article = Article::find($id);
        $footer = Footer::all()[0];
        $commentaire = Commentaire::all();
        return view('publique.blog-post', compact("commentaire","navbar",'footer','article'));
    }




    
}
