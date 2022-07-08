<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('backend.article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.article.add', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->name = $request->get('name');
        $article->slug = Str::slug($request->get('title'), '-');
        $article->description = $request->get('description');
        $article->tags = $request->get('tags');
        $article->category_id = $request->get('category_id');

        if ($request->hasFile('image')) {
            $imageName = Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
        }

        $article->image_url = 'uploads/' . $imageName;

        $article->save();

        return back()->with('toast_success', 'İçerik başarıyla eklendi!');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $related = Article::where('category_id', $article->category_id)->get();
        $tags = explode(',', $article->tags);
        return view('article',['article' => $article, 'related' => $related,'tags' => $tags]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $article = Article::findOrFail($id);
        return view('backend.article.edit', ['article' => $article, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->name = $request->get('name');
        $article->slug = Str::slug($request->get('name'), '-');
        $article->description = $request->get('description');
        $article->tags = $request->get('tags');
        $article->category_id = $request->get('category_id');

        if ($request->hasFile('image')) {
            $imageName = Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = explode('/', $article->image_url)[1];
        }

        $article->image_url = 'uploads/' . $imageName;

        $article->save();

        return back()->with('toast_success', 'İçerik başarıyla güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Article::findOrFail($id);
        $category->delete();

        return back()->with('toast_success', 'Makale başarıyla silindi!');
    }
}
