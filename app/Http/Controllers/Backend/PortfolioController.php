<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioImages;
use File;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // validate
        $this->validate($request, [
            'service' => 'required',
            'project_title' => 'required',
            'project_description' => 'required',
            'cover_image' => 'required',
            'thumbnail' => 'required',
            'image' => 'required'
        ]);

        // dd($request->project_title);
        $portfolio = new Portfolio();
        // $portfolio->service_id = implode(", ", $request->service);
        $portfolio->service_id = $request->service;
        $portfolio->project_title = $request->project_title;
        $portfolio->project_description = $request->project_description;
        if ($request->file('cover_image')) {
            $image = $request->file('cover_image');

            $imagename = $image->getClientOriginalName();
            $imagesize = $image->getClientSize();
            $ext = $image->getClientOriginalExtension();

            $image_title = uniqid().time().'.'.$ext;
            $image->move('public/assets/images/portfolio/', $image_title);
            $portfolio->cover_image = "public/assets/images/portfolio/".$image_title;
        } else {
            $portfolio->cover_image = "public/assets/images/no-image.jpg";
        }
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');

            $imagename = $image->getClientOriginalName();
            $imagesize = $image->getClientSize();
            $ext = $image->getClientOriginalExtension();

            $image_title = uniqid().time().'.'.$ext;
            $image->move('public/assets/images/portfolio/', $image_title);
            $portfolio->thumbnail = "public/assets/images/portfolio/".$image_title;
        } else {
            $portfolio->thumbnail = "public/assets/images/no-image.jpg";
        }
        $portfolio->status = 0;
        $portfolio->save();

        if ($request->file('image')) {

            foreach ($request->file('image') as $image) {
                $imagename = $image->getClientOriginalName();
                $imagesize = $image->getClientSize();
                $ext = $image->getClientOriginalExtension();

                $image_title = uniqid().time().'.'.$ext;
                $image->move('public/assets/images/portfolio/', $image_title);

                $portfolio_image = new PortfolioImages();
                $portfolio_image->portfolio_id = $portfolio->id;
                $portfolio_image->image = "public/assets/images/portfolio/".$image_title;
                $portfolio_image->save();
            }
            
        } 
        // else {
        //     $portfolio_image->image = "public/assets/images/no-image.jpg";
        // }
        

        session()->flash('success', 'Portfolio added successfully');
        return redirect()->route('admin.portfolio');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
