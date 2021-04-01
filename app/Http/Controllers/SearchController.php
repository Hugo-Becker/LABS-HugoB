<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Search;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function search(Request $request)
    {
        $search=$request->search;
        $articlesSearch=Article::query()->where('title','LIKE',"%{$search}%")->paginate(3);
        $logo=Logo::all();
        $categories=Category::all();
        $tags=Tag::all();
        $footer=Footer::all();




        return view('pages.showBySearch',compact(
            'articlesSearch',
            'logo',
            'categories',
            'tags',
            'footer'
        ));

    }

    
}
