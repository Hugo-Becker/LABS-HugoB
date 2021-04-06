<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Category;
use App\Models\Tag;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('backend.articles',compact(
            'articles'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();

        return view('backend.creates.createArticle',compact(
            'categories',
            'tags'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store=new Article;

        if (request()->hasFile(key:'img')) {
            $img=request()->file(key:'img')->hashName();
            request()->file(key:'img')->storeAs(path:'blog',name:$img);
            $store->img=$img;
        } else {
            $store->img='blog-1.jpg';
        }
        $store->title=$request->title;
        $store->text=$request->text;
        $store->category_id=$request->category_id;
        $store->user_id=Auth::id();
        $store->save();
        foreach ($request->tag as $tag) {
            $article=Article::find($store->id);
            $article->tags()->attach($tag,['article_id'=>$store->id]);
        }
        return redirect('/backArticles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $tags=Tag::all();
        $article=Article::find($id);
        $articleTags=$article->tags->pluck('id')->toArray();

        return view('backend.edits.editArticle',compact(
            'categories',
            'tags',
            'article',
            'articleTags'
        ));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Article::find($id);

        if (request()->hasFile(key:'img')) {
            $img=request()->file(key:'img')->hashName();
            request()->file(key:'img')->storeAs(path:'blog',name:$img);
            $update->img=$img;
        } else {
            $update->img=$update->img;
        }
        $update->title=$request->title;
        $update->text=$request->text;
        $update->category_id=$request->category_id;
        $update->user_id=Auth::id();
        foreach ($update->tags as $tag) {
            $update->tags()->detach($tag->id);
        }
        $update->save();
        foreach ($request->tag as $tag) {
            $article=Article::find($update->id);
            $article->tags()->attach($tag,['article_id'=>$update->id]);
        }
        return redirect('/backArticles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
