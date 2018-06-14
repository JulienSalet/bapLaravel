<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Models\Pages;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    use UploadImage;
    
    const PATH_VIEW = 'admin.entities.cms.pages.';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::orderBy('id', 'DESC')->get();
        
        return view(self::PATH_VIEW . 'index')->with([
            'pages' => $pages
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
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|string'
        ]);
        
        $page = new Pages();
        
        if (request()->has('title') && $request->title != null) {
            $page->title = $request->title;
        }
        
        $page->url = asset(str_slug($request->title));
        
        
        if (request()->has('description') && $request->get('description') != null) {
            $page->content = $request->description;
        }
        
        if (request()->has('seo_title') && $request->seo_title != null) {
            $page->seo_title = $request->seo_title;
        }
        
        if (request()->has('seo_description') && $request->seo_description != null) {
            $page->seo_description = $request->seo_description;
        }
        
        if (request()->has('og_title') && $request->og_title != null) {
            $page->og_title = $request->og_title;
        }
        
        if (request()->has('og_description') && $request->og_description != null) {
            $page->og_description = $request->og_description;
        }
    
        if (request()->has('og_image')) {
            $img = $this->uploadImage(request()->file('og_image'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $page->og_image = $img->id;
        }
        
        $page->save();
        
        return redirect()->action('Admin\Cms\PagesController@index')->with('success', 'Votre page a bien été crée');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::where('id', $id)->first();
    
        return view(self::PATH_VIEW . 'edit')->with([
            'page' => $page
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required|string'
        ]);
        $page = Pages::where('id', $id)->first();
    
        if (request()->has('title') && $request->title != null) {
            $page->title = $request->title;
        }
    
        $page->url = asset(str_slug($request->title));
    
    
        if (request()->has('description') && $request->get('description') != null) {
            $page->content = $request->description;
        }
    
        if (request()->has('seo_title') && $request->seo_title != null) {
            $page->seo_title = $request->seo_title;
        }
    
        if (request()->has('seo_description') && $request->seo_description != null) {
            $page->seo_description = $request->seo_description;
        }
    
        if (request()->has('og_title') && $request->og_title != null) {
            $page->og_title = $request->og_title;
        }
    
        if (request()->has('og_description') && $request->og_description != null) {
            $page->og_description = $request->og_description;
        }
        
        if (request()->has('og_image')) {
            $img = $this->uploadImage(request()->file('og_image'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $page->og_image = $img->id;
        }
    
        $page->save();
    
        return redirect()->action('Admin\Cms\PagesController@index')->with('success', 'Votre page a bien été modifier');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Pages::where('id', $id)->first();
    
        $user->delete();
    
        return redirect()->action('Admin\Cms\PagesController@index')->with('success', 'Page supprimée avec succès');
    
    }
}
