<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Article;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        return view('indexartikel',compact('articles'));
    }

    public function create()
    {
        return view('formtambah');
    }

    public function store(Request $request)
    {   
        
        Article::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => Str::slug('$request->judul'),
            'tag' => $request->tag
        ]);

        return redirect('/artikel');        
    }

    public function show(Article $article)
    {
        return view('showartikel', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('form-edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // dd($request->id);
        Article::where('id',$article->id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'slug' => Str::slug($request->judul),
                    'tag' => $request->tag
                ]);

        return redirect('/artikel'); 
    }

    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect('/artikel');
    }
}
