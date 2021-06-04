<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HireUs;
use App\HireusAttachment;

class HireUSController extends Controller
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
        // dd($request->all());

        // validate
        $this->validate($request, [
            'service' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'project_title' => 'required',
        ]);

        $hire = new HireUs();
        $hire->service = implode(', ', $request->service);
        $hire->customer_name = $request->customer_name;
        $hire->customer_email = $request->customer_email;
        $hire->customer_phone = $request->customer_phone;
        $hire->project_title = $request->project_title;
        $hire->project_description = $request->project_description;
        $hire->status = 0;
        $hire->save();

        if ($request->file('attachment')) {
            foreach ($request->file('attachment') as $image) {
                $imagename = $image->getClientOriginalName();
                $imagesize = $image->getClientSize();
                $ext = $image->getClientOriginalExtension();

                $image_title = uniqid().time().'.'.$ext;
                $image->move('public/assets/images/hire-us/', $image_title);

                $attach = new HireusAttachment();
                $attach->hireus_id = $hire->id;
                $attach->ext = $ext;
                $attach->attachment = "public/assets/images/hire-us/".$image_title;
                $attach->save();
            }

        } else {
            $hire->attachment = "public/assets/images/no-image.jpg";
        }
        

        session()->flash('success', 'Thanks for hiring');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hireus = HireUs::find($id);
        return view('backend.pages.hireus.show', compact('hireus'));
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

    public function active_status($id)
    {
        $hireus = HireUs::find($id);
        if ($hireus->status == 0 || $hireus->status == 2) {
            $hireus->status = 1;
            $hireus->save();
        }

        session()->flash('success', 'Activated the project');
        return redirect()->back();
    }

    public function archive_status($id)
    {
        $hireus = HireUs::find($id);
        if ($hireus->status == 0 || $hireus->status == 1) {
            $hireus->status = 2;
            $hireus->save();
        }

        session()->flash('success', 'Project archived');
        return redirect()->back();
    }
}
