<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajaxcrud;
use Session;
use File;

class ajaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajax_data = Ajaxcrud::latest()->get();
        return view('ajax.index',compact('ajax_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajax.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'gender' =>'required',
        //     'languages' => 'required',
        //     'image' => 'required',

        // ]);

        dd($request);
        $data=[];
        $data =$request->all();
        // dd($data['languages']);
        // $data['languages'] = implode(',',$request->languages);


        $image_name = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images',$image_name));

        $data['image'] = 'images/'.$image_name;


        Ajaxcrud::create($data);
        Session::flash('success','Data Inserted');
        return response()->json(['success'=>true]);


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
        $ajax_edit = Ajaxcrud::find($id);
        // dd($ajax_edit);
        return view('ajax.edit',compact('ajax_edit'));
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
        $ajax_delete = Ajaxcrud::find($id);

        $ajax_delete->delete();

        $existing_image = $ajax_delete->image;
        if(File::exists(public_path('assets/'.$existing_image))){
            File::delete(public_path('assets/'.$existing_image));
        }

        Session::flash('success','Data Deleted');

        return redirect('ajax');

    }
}
