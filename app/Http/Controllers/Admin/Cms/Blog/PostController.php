<?php

namespace App\Http\Controllers\Admin\Cms\Blog;

use App\Models\Category;
use App\Models\Post;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    use UploadImage;
    
    const PATH_VIEW = 'admin.entities.cms.blog.post.';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        
        return view(self::PATH_VIEW . 'index')->with([
            'posts' => $posts
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
            'categories' => Category::orderBy('id', 'DESC')->get()
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
            'title' => 'required|string',
            'status' => 'required',
            'excerpt' => 'required',
            'content' => 'required'
        ]);
        $post = new Post();
    
        if (request()->has('title') && $request->title != null) {
            $post->title = $request->title;
        }
        if (request()->has('subtitle') && $request->subtitle != null) {
            $post->subtitle = $request->subtitle;
        }
        $post->slug = str_slug($request->title);
    
        if (request()->has('excerpt') && $request->get('excerpt') != null) {
            $post->excerpt = $request->excerpt;
        }
        //dd($post);
        
        if (request()->has('content') && $request->get('content') != null) {
            $post->content = $request->get('content');
        }
        //dd($request);
        if (request()->has('status') && $request->get('status') != null) {
            $post->publish = (int)$request->status;
        }
        
        if (request()->has('file')) {
            $img = $this->uploadImage(request()->file('file'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $post->fk_file_id = $img->id;
        }
        
        $post->save();
    
        $currentPost = Post::where('id', $post->id)->first();
        if (request()->has('categories') && $request->get('categories') != null) {
            foreach($request->categories as $category){
                //dd($category);
                //$cate = Category::where('id', (int)$category)->first();
                $currentPost->getCategories()->attach((int)$category);
                //$cate->getPosts()->attach($post->id);
            
            }
        }
        
        $post->save();
        
        return redirect()->action('Admin\Cms\Blog\PostController@index')->with('success', 'Votre article a bien été crée');
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
        $post = Post::where('id', $id)->first();
        $categories = Category::all();
        return view(self::PATH_VIEW . 'edit')->with([
            'post' => $post,
            'categories' => $categories
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
            'title' => 'required|string',
            'status' => 'required',
            'excerpt' => 'required',
            'content' => 'required'
        ]);
        
        $post = Post::where('id', $id)->first();
        
        if (request()->has('title') && $request->title != null) {
            $post->title = $request->title;
        }
        if (request()->has('subtitle') && $request->subtitle != null) {
            $post->subtitle = $request->subtitle;
        }
        $post->slug = str_slug($request->title);
    
        if (request()->has('excerpt') && $request->get('excerpt') != null) {
            $post->excerpt = $request->excerpt;
        }
        if (request()->has('categories') && $request->get('categories') != null) {
            //dd($request->categories);
            foreach($request->categories as $category){
                $post->getCategories()->sync((int)$category);
            }
        }
        if (request()->has('content') && $request->get('content') != null) {
            $post->content = $request->get('content');
        }
        if (request()->has('status') && $request->get('status') != null) {
            $post->publish = (int)$request->get('status');
        }
    
        if (request()->has('file')) {
            $img = $this->uploadImage(request()->file('file'), str_slug($request->title) . '-og'); // TODO : Add width & height in parameters
            $post->fk_file_id = $img->id;
        }
    
        $post->save();
        
        return redirect()->action('Admin\Cms\Blog\PostController@index')->with('success', 'Votre article a bien été modifier');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        
        $post->delete();
        
        return redirect()->action('Admin\Cms\Blog\PostController@index')->with('success', 'Article supprimée avec succès');
        
    }
    
    public function publish($id)
    {
        $post = Post::where('id', $id)->first();
    
    
        $post->publish = 1;
        $post->save();
        return redirect()->back()->with('success', 'Votre article est maintenant publié !');
    }
    public function unPublish($id)
    {
        $post = Post::where('id', $id)->first();
    
    
        $post->publish = 0;
        $post->save();
        return redirect()->back()->with('success', 'Votre article est maintenant caché !');
    }
}
