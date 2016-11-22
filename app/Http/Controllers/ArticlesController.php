<?php

namespace App\Http\Controllers;

use App\Http\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ArticlesController extends Controller
{

    public function getIndex()
    {
        $articles = Article::all();
        return view('articles.index')->with(compact('articles'));
    }

    public function getCreate()
    {
        return view('articles.new');
    }

    public function postCreate(Request $request)
    {
        $data = $request->all();
        $article = new Article();
        $article->posted_by = $data['posted_by'];
        $article->title = $data['title'];
        $article->comment = $data['comment'];
        $article->save();
        return redirect()->to('/');
    }

    public function getEdit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function postEdit(Request $request, $id)
    {
        $data = $request->all();
        $article = Article::find($id);
        $article->fill($data);
        $article->save();
        return redirect()->to('/');
    }

    public function getDestroy($id)
    {
        $article = Article::find($id);
        return view('articles.delete', compact('article'));
    }

    public function postDestroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->to('/');
    }

}