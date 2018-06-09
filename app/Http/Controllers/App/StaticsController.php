<?php

namespace App\Http\Controllers\App;

use App\Models\Pages;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    const PATH_VIEW = 'app.entities.statics.';
    const CONTROLLER = 'App\StaticsController@';
    
    public function home(Request $request)
    {
        $page = Pages::find(1);
        
        //Je recupere tout les articles et je les trie par ID descendant (le dernier crée en premier)
        $articles = Post::orderBy('id', 'DESC')->get();
        
        return view(self::PATH_VIEW . 'home')->with([
            'page'     => $page,
            'articles' => $articles
        ]);
    }
    
    public function showBlog(Request $request)
    {
        
        return view(self::PATH_VIEW . 'blog')->with([
        ]);
    }
    
    
    public function showGaleries(Request $request)
    {
        
        $page = Pages::find(5);
        
        return view(self::PATH_VIEW . 'galeries')->with([
            'page' => $page,
        ]);
    }
    
    public function showLogement(Request $request)
    {
        $page = Pages::find(10);
        
        return view(self::PATH_VIEW . 'temoignages')->with([
            'page' => $page,
        ]);
    }
    
    public function showReservation(Request $request)
    {
        $page = Pages::find(3);
        
        return view(self::PATH_VIEW . 'reservations.create')->with([
            'page' => $page,
        ]);
    }
    
    public function showAcces(Request $request)
    {
        $page = Pages::find(4);
        
        return view(self::PATH_VIEW . 'access')->with([
            'page' => $page,
        ]);
    }
}
