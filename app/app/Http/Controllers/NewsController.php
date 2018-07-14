<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class NewsController extends Controller
{
    /**
     * Protect all routes 
     * Only authenticated users can can use this routes
     */ 
    public function __construct()
    {
        $this->middleware(function($request,$next)
        {
            if(!Auth::check()){
                return redirect()->guest('admin/login')->with('status', 'You are not logged in. Please authenticate.');
            }
            
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')
        ->get();

        return view('listnews',['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'bail|required|unique:news|max:70',
            'author' => 'required',
            'content' => 'required'
        ]);

        $news = new News;

        $news->title = $request->title;
        $news->content = $request->content;
        $news->active = (int)$request->active;
        $news->url = strtolower(str_replace(" ", "-",$request->title));
        $news->author = $request->author;

        $news->save();

        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = \App\News::where('id', '=', $id)->firstOrFail();

        return view('editnews', ['news' =>  $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news, $id)
    {   
        $this->validate(request(), [
            'title' => ['bail',
                'required',
                'max:70',
                Rule::unique('news')->ignore($id)],
            'author' => 'required',
            'content' => 'required'
        ]);

        $news = News::find($id);

        $news->title = $request->title;
        $news->content = $request->content;
        $news->active = (int)$request->active;
        $news->url = strtolower(str_replace(" ", "-",$request->title));
        $news->author = $request->author;

        $news->save();

        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        return redirect('/admin/news');
    }
}
