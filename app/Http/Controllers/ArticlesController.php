<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ArticlesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = article::all();
        $articles = article::orderBy('id', 'desc')->get();
        //$articles = article::orderBy('id', 'desc')->paginate(1);
        //$articles = article::orderBy('id','desc')->take(10)->get();
        return View('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'author_name' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('public/images', $fileNameToStore);
		
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $article = new article();
        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->author_name = $request->author_name;
        $article->admin_id = auth()->user()->id;
        $article->image=$fileNameToStore;
        $article->save();
        return redirect('/articles/' . $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'author_name' => 'required',
        ]);
        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->author_name = $request->author_name;
        $article->save();
        return redirect('/articles/' . $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article == null) {
            // retrurn not found
        }
        $article->delete();
        return redirect('/articles');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $results = article::where('title', 'LIKE', '%' . $search_text . '%')
        ->orWhere ('category', 'LIKE', '%' . $search_text . '%')
        ->orWhere ('author_name', 'LIKE', '%' . $search_text . '%')
        ->orWhere ('content', 'LIKE', '%' . $search_text . '%')->get ();
        return view('result')->with('results', $results);
    }
}
