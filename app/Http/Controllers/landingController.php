<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\DB;

class landingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::orderBy('created_at', 'desc')->take(10)->get();
        $categorys = DB::select('SELECT DISTINCT category FROM articles');
        return View('landingPage.landing', compact('articles'), compact('categorys'));
    }

    public function category($category)
    {
        $articles = article::where('category', 'LIKE', '%' . $category . '%')->paginate(8);
        $categorys = DB::select('SELECT DISTINCT category FROM articles');
        return View('landingPage.news', compact('articles'), compact('categorys'));
    }

    public function allArticles()
    {
        $articles = article::orderBy('created_at', 'desc')->paginate(8);
        $categorys = DB::select('SELECT DISTINCT category FROM articles');
        return View('landingPage.news', compact('articles'), compact('categorys'));
    }

    public function search()
    {
        $categorys = DB::select('SELECT DISTINCT category FROM articles');
        $search_text = $_GET['query'];
        $articles = article::where('title', 'LIKE', '%' . $search_text . '%')
            ->orWhere('category', 'LIKE', '%' . $search_text . '%')
            ->orWhere('author_name', 'LIKE', '%' . $search_text . '%')
            ->orWhere('content', 'LIKE', '%' . $search_text . '%')->paginate(30);
        return view('landingPage.news', compact('articles'), compact('categorys'));
    }


    public function show(Article $article)
    {
        $categorys = DB::select('SELECT DISTINCT category FROM articles');
        return View('landingPage.show', compact('article'), compact('categorys'));
    }
}
