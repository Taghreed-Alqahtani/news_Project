<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;


class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = comment::orderBy('created_at', 'desc')->get();
        return View('dashboardPage.comments')->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'comment' => 'required',
        ]);

        $comment = new comment();
        $comment->comment = $request->comment;
        $comment->status = 'pending';
        $comment->approved = 0;
        $comment->article_id = $request->article_id;
        $comment->save();
        return back();
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

    public function edit(comment $comment)
    {
        return view('dashboardPage.comments')->with('comment', $comment);
    }

    public function update(Request $request, comment $comment)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);
        $comment->comment = $request->comment;
        $comment->save();
        return redirect('/articles/' .$comment->article_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, comment $comment)
    {
        $comment->status = 'approved';
        $comment->approved = 1;
        $comment->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        if ($comment == null) {
            return back();
        }
        $comment->delete();
        return back();
    }
}
