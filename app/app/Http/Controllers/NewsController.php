<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $news = \App\News::with('user')->where('active', '=', '1')
        ->orderBy('created_at', 'desc')
        ->take(6)
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
        $news::find($id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
