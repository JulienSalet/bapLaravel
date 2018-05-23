<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Models\Block;
use App\Models\BlockCategory;
use App\Models\Pages;
use Carbon\Carbon;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlocksController extends Controller
{
    
    const CONTROLLER = 'Admin\Cms\BlockController@';
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
        $page = Pages::where('id', $id)->first();
        
        $block = new Block();
        $block->key = str_slug($request->name);
        $block->type = $request->type;
        $block->fk_category_id = $request->category;
        $block->fk_page_id = $page->id;
        $block->value = $request->get('content');
        $block->created_at = Carbon::now();
        $block->save();
        
        return redirect()->action('Admin\Cms\BlocksController@show', $id)->with('success', 'Votre block a bien été crée');
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
    
    public function showBlocks(Request $request, $id, $slug)
    {
        $page = Pages::where('id', $id)->first();
        
        $category = BlockCategory::where('slug', $slug)->first();
        return view('admin.entities.cms.pages.blocks.showBlock')->with([
            'page' => $page,
            'category' => $category,
            'blocks' => $category->getBlocks
        ]);
    }
    
    public function showBlocksDetails(Request $request, $id, $slug, $blockId)
    {
        $page = Pages::where('id', $id)->first();
    
        $category = BlockCategory::where('slug', $slug)->first();
        $block = Block::where('id', $blockId)->first();
        return view('admin.entities.cms.pages.blocks.showBlockDetails')->with([
            'page' => $page,
            'category' => $category,
            'blocks' => $category->getBlocks,
            'block' => $block
        ]);
    }
    
    public function updateBlock(Request $request, $id)
    {
        $block = Block::where('id', $id)->first();
        
        $block->key = $request->key;
        $block->value = $request->value;
        $block->save();
        
        return redirect()->back();
        
    }
    
    public function deleteBlock(Request $request, $id)
    {
        $block = Block::where('id', $id)->first();
        $block->delete();
        
        return redirect()->action(self::CONTROLLER . '');   x
        
    }
}
