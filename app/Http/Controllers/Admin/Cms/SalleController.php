<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Models\Salle;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalleController extends Controller
{
    const PATH_VIEW = 'admin.entities.cms.salle.';
    
    
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = Salle::orderBy('id', 'DESC')->get();
        
        return view(self::PATH_VIEW . 'index')->with([
            'salles' => $salles
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::PATH_VIEW . 'create')->with([
            'salles' => Salle::orderBy('id', 'DESC')
        ]);
    }
    
    public function store(Request $request)
    {
        
        request()->validate([
            'title'        => 'required|string',
            'numero_salle' => 'required|integer',
            'nb_people'    => 'required|integer',
            'content'      => 'required',
        ]);
        $salle = new Salle();
        if (request()->has('title') && $request->title != null) {
            $salle->titre = $request->title;
            $salle->slug = str_slug($request->title);
        }
        if (request()->has('numero_salle') && $request->numero_salle != null) {
            $salle->numero_salle = $request->numero_salle;
        }
        
        if (request()->has('nb_people') && $request->nb_people != null) {
            $salle->nb_people = $request->nb_people;
        }
        
        if (request()->has('content') && $request->get('content') != null) {
            $salle->content = $request->get('content');
        }
        
        if (request()->has('horaire')) {
            $salle->horraire = json_encode($request->horaire);
        }
    
        if (request()->has('file')) {
            $img = $this->uploadImage(request()->file('file'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $salle->fk_file_id = $img->id;
        }
        
        $salle->save();
        
        return redirect()->action('Admin\Cms\SalleController@index')->with('success', 'La salle a bien été crée');
    }
    
    public function edit($id)
    {
        $salle = Salle::where('id', $id)->first();
        
        return view(self::PATH_VIEW . 'edit')->with([
            'salle' => $salle
        ]);
    }
    
    public function update(Request $request, $id)
    {
    
        request()->validate([
            'title'        => 'required|string',
            'numero_salle' => 'required',
            'nb_people'    => 'required',
            'content'      => 'required',
        ]);
        
        $salle = Salle::where('id', $id)->first();
        
        if (request()->has('title') && $request->title != null) {
            $salle->titre = $request->title;
            $salle->slug = str_slug($request->title);
        }
    
        if (request()->has('numero_salle') && $request->numero_salle != null) {
            $salle->numero_salle = $request->numero_salle;
        }
    
        if (request()->has('nb_people') && $request->nb_people != null) {
            $salle->nb_people = $request->nb_people;
        }
    
        if (request()->has('content') && $request->get('content') != null) {
            $salle->content = $request->get('content');
        }
    
        if (request()->has('horaire')) {
            $salle->horraire = json_encode($request->horaire);
        }
    
        if (request()->has('file')) {
            $img = $this->uploadImage(request()->file('file'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $salle->fk_file_id = $img->id;
        }
    
        $salle->save();
        
        return redirect()->action('Admin\Cms\SalleController@index')->with('success', 'Salle modifié avec succès');
    }
    
    
    public function destroy($id)
    {
        $salle = Salle::where('id', $id)->first();
        
        $salle->delete();
        
        return redirect()->action('Admin\Cms\SalleController@index')->with('success', 'Salle supprimée avec succès');
        
    }
}
