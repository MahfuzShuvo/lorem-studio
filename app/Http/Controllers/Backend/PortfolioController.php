<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioImages;
use App\PortfolioSection;
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
        if ($request->title) {
            foreach ($request->title as $key => $title) {
                $sec = new PortfolioSection();

                $sec->portfolio_id = $portfolio->id;
                $sec->title = $title;
                if ($request->description[$key]) {
                    $sec->description = $request->description[$key];
                } else {
                    $sec->description = null;
                }
                if ($request->images[$key]) {
                    $image = $request->images[$key];

                    $imagename = $image->getClientOriginalName();
                    $imagesize = $image->getClientSize();
                    $ext = $image->getClientOriginalExtension();

                    $image_title = uniqid().time().'.'.$ext;
                    $image->move('public/assets/images/portfolio/section/', $image_title);
                    $sec->images = "public/assets/images/portfolio/section/".$image_title;
                } else {
                    $sec->images = "public/assets/images/no-image.jpg";
                }
                $sec->save();
            }
        }
        

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
        $portfolio = Portfolio::find($id);
        return view('backend.pages.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolioImage = PortfolioImages::where('portfolio_id', $portfolio->id)->get();
        $portfolioSection = PortfolioSection::where('portfolio_id', $portfolio->id)->get();
        return view('backend.pages.portfolio.edit', compact('portfolio', 'portfolioImage', 'portfolioSection'));
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
        $portfolio = Portfolio::find($id);
        // $portfolioImage = PortfolioImages::where('portfolio_id', $portfolio->id)->get();
        // $portfolioSection = PortfolioSection::where('portfolio_id', $portfolio->id)->get();
        // $portfolio->service_id = implode(", ", $request->service);
        $portfolio->service_id = $request->service;
        $portfolio->project_title = $request->project_title;
        $portfolio->project_description = $request->project_description;
        if ($request->file('cover_image')) {
            if (File::exists($portfolio->cover_image)) {
                File::delete($portfolio->cover_image);
            } else {
                session()->flash('error', $portfolio->cover_image.' not found');
                return redirect()->back();
            }

            $image = $request->file('cover_image');

            $imagename = $image->getClientOriginalName();
            $imagesize = $image->getClientSize();
            $ext = $image->getClientOriginalExtension();

            $image_title = uniqid().time().'.'.$ext;
            $image->move('public/assets/images/portfolio/', $image_title);
            $portfolio->cover_image = "public/assets/images/portfolio/".$image_title;
        }
        if ($request->file('thumbnail')) {
            if (File::exists($portfolio->thumbnail)) {
                File::delete($portfolio->thumbnail);
            } else {
                session()->flash('error', $portfolio->thumbnail.' not found');
                return redirect()->back();
            }

            $image = $request->file('thumbnail');

            $imagename = $image->getClientOriginalName();
            $imagesize = $image->getClientSize();
            $ext = $image->getClientOriginalExtension();

            $image_title = uniqid().time().'.'.$ext;
            $image->move('public/assets/images/portfolio/', $image_title);
            $portfolio->thumbnail = "public/assets/images/portfolio/".$image_title;
        }
        $portfolio->status = 0;
        $portfolio->save();

        if ($request->file('image')) {
            $portfolio_image = PortfolioImages::where('portfolio_id', $portfolio->id)->get();

            foreach ($portfolio_image as $portImg) {
                if (File::exists($portImg->image)) {
                    File::delete($portImg->image);
                } else {
                    session()->flash('error', $portImg->image.' not found');
                    return redirect()->back();
                }
                $portImg->delete();
            }

            foreach ($request->file('image') as $image) {
                $imagename = $image->getClientOriginalName();
                $imagesize = $image->getClientSize();
                $ext = $image->getClientOriginalExtension();

                $image_title = uniqid().time().'.'.$ext;
                $image->move('public/assets/images/portfolio/', $image_title);

                $portfolio_image->portfolio_id = $portfolio->id;
                $portfolio_image->image = "public/assets/images/portfolio/".$image_title;
                $portfolio_image->save();
            }
            
        } 
        // else {
        //     $portfolio_image->image = "public/assets/images/no-image.jpg";
        // }

        // section update
        
        // if ($request->title) {
        //     foreach ($request->title as $key => $title) {
        //         $section = PortfolioSection::where('portfolio_id', $portfolio->id)->get();

        //         foreach ($section as $sec) {
        //             $sec->portfolio_id = $portfolio->id;
        //             $sec->title = $title;
        //             if ($request->description) {
        //                 $sec->description = $request->description;
        //             } else {
        //                 $sec->description = null;
        //             }
        //             if ($request->images) {
        //                 if (File::exists($sec->images)) {
        //                     File::delete($sec->images);
        //                 } else {
        //                     session()->flash('error', $sec->images.' not found');
        //                     // return redirect()->back();
        //                 }

        //                 $image = $request->images;

        //                 $imagename = $image->getClientOriginalName();
        //                 $imagesize = $image->getClientSize();
        //                 $ext = $image->getClientOriginalExtension();

        //                 $image_title = uniqid().time().'.'.$ext;
        //                 $image->move('public/assets/images/portfolio/section/', $image_title);
        //                 $sec->images = "public/assets/images/portfolio/section/".$image_title;
        //             }
        //             $sec->save();
        //         }
                
        //     }
        // }
        

        session()->flash('success', 'Portfolio updated successfully');
        return redirect()->route('admin.portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        if (!is_null($portfolio)) {
            $portfolioImage = PortfolioImages::where('portfolio_id', $portfolio->id)->get();
            $portfolioSection = PortfolioSection::where('portfolio_id', $portfolio->id)->get();

            foreach ($portfolioSection as $sec) {
                if (File::exists($sec->images)) {
                    File::delete($sec->images);
                } else {
                    session()->flash('error', $sec->images.' not found');
                    return redirect()->back();
                }
                $sec->delete();
            }

            foreach ($portfolioImage as $portImg) {
                if (File::exists($portImg->image)) {
                    File::delete($portImg->image);
                } else {
                    session()->flash('error', $portImg->image.' not found');
                    return redirect()->back();
                }
                $portImg->delete();
            }

            if (File::exists($portfolio->thumbnail) || File::exists($portfolio->cover_image)) {
                File::delete($portfolio->thumbnail);
                File::delete($portfolio->cover_image);
            } else {
                session()->flash('error', $portfolio->thumbnail.' & '.$portfolio->cover_image.' not found');
                return redirect()->back();
            }
            $portfolio->delete();
        }
        

        session()->flash('success', 'Successfully deleted the portfolio');
        return redirect()->back();
    }

    public function status($id)
    {
        $portfolio = Portfolio::find($id);

        if ($portfolio->status == 0) {
            $portfolio->status = 1;
            $portfolio->save();

            session()->flash('success', 'Successfully marked trendy');
            return redirect()->back();
        } else {
            $portfolio->status = 0;
            $portfolio->save();

            session()->flash('message', 'Remove ftom trendy');
            return redirect()->back();
        }

    }
}
