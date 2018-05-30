<?php

namespace App\Http\Controllers\Admin\Cms\Blog;

use App\Models\Category;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    const PATH_VIEW = 'admin.entities.cms.blog.categories.';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        
        return view(self::PATH_VIEW . 'index')->with([
            'categories' => $categories
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
            'categories' => Category::orderBy('id', 'DESC')
        ]);
    }
    
    public function store(Request $request)
    {
    
        request()->validate([
            'title' => 'required|string',
        ]);
        $category = new Category();
    
        if (request()->has('title') && $request->title != null) {
            $category->title = $request->title;
            $category->slug = str_slug($request->title);
        }
        $category->save();
        return redirect()->action('Admin\Cms\Blog\CategoriesController@index')->with('success', 'Votre categorie a bien été crée');
    }
    
    public function edit($id)
    {
        $categorie = Category::where('id', $id)->first();
        
        return view(self::PATH_VIEW . 'edit')->with([
            'category' => $categorie
        ]);
    }
    
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required|string',
        ]);
    
        $category = Category::where('id', $id)->first();
    
        if (request()->has('title') && $request->title != null) {
            $category->title = $request->title;
        }
        $category->slug = str_slug($request->title);
        $category->save();
        
        return redirect()->action('Admin\Cms\Blog\CategoriesController@index')->with('success', 'Categorie modifié avec succès');
    }
    
    public function destroy($id)
    {
        $post = Category::where('id', $id)->first();
        
        $post->delete();
        
        return redirect()->action('Admin\Cms\Blog\CategoriesController@index')->with('success', 'Categorie supprimée avec succès');
        
    }
}
