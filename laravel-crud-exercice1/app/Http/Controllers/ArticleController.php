<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view("back.pages.article.index", compact("articles"));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view("back/pages/article.edit", compact("article"));
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->name = $request->name ?? " ";
        $article->description = $request->description ?? " ";
        $article->autor = $request->autor ?? " ";
        $article->publishdate = $request->publishdate ?? " ";
        $article->updated_at = now();

        $article->save();
        return redirect()->route("article.index");
    }

    public function create()
    {
        return view("back/pages/article.create");
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->name = $request->name ?? " ";
        $article->description = $request->description ?? " ";
        $article->autor = $request->autor ?? " ";
        $article->publishdate = $request->publishdate ?? " ";
        $article->updated_at = now();

        $article->save();
        return redirect()->route("article.index");
    }
}
