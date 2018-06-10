<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Pages;
use App\Models\Post;
use App\Models\Reservation;
use App\Models\Salle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StaticsController extends Controller
{
    const PATH_VIEW = 'app.entities.statics.';
    const CONTROLLER = 'App\StaticsController@';
    
    public function home(Request $request)
    {
        $page = Pages::find(1);
        
        //Je recupere tout les articles et je les trie par ID descendant (le dernier crée en premier)
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'home')->with([
            'page'     => $page,
            'articles' => $articles
        ]);
    }
    
    public function showBlog(Request $request)
    {
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
        return view(self::PATH_VIEW . 'blog')->with([
            'articles' => $articles
        ]);
    }
    
    
    public function showGaleries(Request $request)
    {
        
        $page = Pages::find(5);
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'galeries')->with([
            'page'     => $page,
            'articles' => $articles
        ]);
    }
    
    /*public function showLogement2(Request $request)
    {
        $page = Pages::find(100);
        
        return view(self::PATH_VIEW . 'temoignages')->with([
            'page' => $page,
        ]);
    }*/
    
    public function showReservation(Request $request)
    {
        $page = Pages::find(3);
        $salles = Salle::orderBy('id', 'DESC')->get();
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'reservations.create')->with([
            'page'     => $page,
            'salles'   => $salles,
            'articles' => $articles
        ]);
    }
    
    public function showAcces(Request $request)
    {
        $page = Pages::find(4);
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'access')->with([
            'page'     => $page,
            'articles' => $articles
        ]);
    }

    public function showOrientation(Request $request)
    {
        $page = Pages::find(6);
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'sidebar.orientation')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showSante(Request $request)
    {
        $page = Pages::find(8);
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'sidebar.sante')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showLogement(Request $request)
    {
        $page = Pages::find(10);
        $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();
    
    
        return view(self::PATH_VIEW . 'sidebar.logement')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showScolarite(Request $request)
    {
        $page = Pages::find(7);
                $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();


        return view(self::PATH_VIEW . 'sidebar.scolarite')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showLoisir(Request $request)
    {
        $page = Pages::find(9);
                $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();


        return view(self::PATH_VIEW . 'sidebar.loisir')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showMobilite(Request $request)
    {
        $page = Pages::find(11);
                $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();


        return view(self::PATH_VIEW . 'sidebar.mobilite')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function showVoyage(Request $request)
    {
        $page = Pages::find(12);
                $articles = Post::where('publish', 1)->orderBy('id', 'DESC')->get();


        return view(self::PATH_VIEW . 'sidebar.voyages')->with([
            'page' => $page,
            'articles' => $articles
        ]);
    }

    public function login(Request $request)
    {
        
        $login = new LoginController();
        $login->login($request);
        
        return redirect()->back()->with('sucess', 'Vous etes connecté !');
    }
    
    public function register(Request $request)
    {
        $register = new RegisterController();
        $register->register($request);
        
        return redirect()->back()->with('sucess', 'Vous êtes incrit !');
    }
    
    public function postReservation(Request $request)
    {
        request()->validate([
            'salle'   => 'required',
            'date'    => 'required',
            'horaire' => 'required'
        ]);
        
        $reservation = new Reservation();
        $reservation->fk_salle_id = $request->salle;
        $date = Carbon::createFromFormat('d/m/Y', request()->date);
        $reservation->date = $date;
        $reservation->horaire = json_encode($request->horaire);
        $reservation->fk_user_id = Auth::user()->id;
        $reservation->save();
        
        return redirect()->back()->with('success', 'Votre réservation a bien été enregistré, vous allez recevoir un mail avec un recapitulatif de la réservation');
    }
}
