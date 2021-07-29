<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Service;

class ServiceController extends Controller
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
        return view('backend.pages.services.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);

        // dd($request->name);
        $service = new Service();
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->description = $request->description;
        $service->status = 0;
        $service->save();

        session()->flash('success', 'Service added successfully');
        return redirect()->route('admin.service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.pages.services.edit', compact('service'));
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
        $service = Service::find($id);

        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        session()->flash('success', 'Service updated successfully');
        return redirect()->route('admin.service');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        session()->flash('message', 'Service deleted successfully');
        return redirect()->back();
    }

    public function status($id)
    {
        $service = Service::find($id);

        if ($service->status == 0) {
            $service->status = 1;
            $service->save();
        } else {
            $service->status = 0;
            $service->save();
        }

        session()->flash('success', 'Status changed successfully');
        return redirect()->back();
    }
}
