<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('index', ['categories' => $categories, 'articles' => $articles]);
    }

}
