<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HireUs;
use App\HireusAttachment;

class HireUsController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        // validate
        $this->validate($request, [
            // 'service' => 'null',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'project_title' => 'required',
        ]);

        $hire = new HireUs();
        // $hire->service = implode(', ', $request->service);
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
}
