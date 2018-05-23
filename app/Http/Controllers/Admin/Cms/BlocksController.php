<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Models\BlockCategory;
use App\Models\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlocksController extends Controller
{
    public function show(Request $request,$id)
    {
        $page = Pages::where('id', $id)->first();
        $block = $page->getBlocks;
        return view('admin.entities.cms.pages.blocks.show')->with([
            'page' => $page
        ]);
    }
    
    public function createBlock(Request $request, $id)
    {
        dd($request);
    }
    
    public function createFolder(Request $request, $id)
    {
        $page = Pages::where('id', $id)->first();
        
        $category = new BlockCategory();
        $category->name = $request->name;
        $category->fk_page_id = $page->id;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->back()->with('success', 'Dossier crée');
    }
}
