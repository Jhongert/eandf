<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TestimonialController extends Controller
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

    protected $categories = [
        ['value' => 'divorce-and-family-low', 'label' => 'Divorce &amp; Family Law'],
        ['value' => 'bankruptcy', 'label' => 'Bankruptcy'],
        ['value' => 'personal-injury', 'label' => 'Personal Injury']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')
        ->get();

        return view('admin.testimonials.list',['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = [
        //     ['value' => 'divorce_family', 'label' => 'Divorce &amp; Family Law'],
        //     ['value' => 'bankruptcy', 'label' => 'Bankruptcy'],
        //     ['value' => 'personal_injury', 'label' => 'Personal Injury']
        // ];

        return view('admin.testimonials.create',['categories' => $this->categories]);
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
            'author' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $testimonial = new Testimonial;

        $testimonial->author = $request->author;
        $testimonial->content = $request->content;
        $testimonial->category = $request->category;
        $testimonial->active = (int)$request->active;

        $testimonial->save();
        
        return redirect('admin/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial, $id)
    {   
        
        // $categories = ['Divorce and Family Law', 'Bankruptcy', 'Personal Injury'];

        $data = Testimonial::where('id', '=', $id)->firstOrFail();

        return view('admin.testimonials.edit', ['data' => $data, 'categories' => $this->categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial, $id)
    {
        $this->validate(request(), [
            'author' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $testimonial = Testimonial::find($id);

        $testimonial->author = $request->author;
        $testimonial->content = $request->content;
        $testimonial->category = $request->category;
        $testimonial->active = (int)$request->active;

        $testimonial->save();
        
        return redirect('admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->delete();

        return redirect('/admin/testimonials');
    }
}
