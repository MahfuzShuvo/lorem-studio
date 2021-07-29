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
        //
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
