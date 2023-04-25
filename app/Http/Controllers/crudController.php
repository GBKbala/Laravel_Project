<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
use File;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->get();
        return view('crud.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' =>'required',
            'languages' => 'required',
            'image' => 'required'
        ]);
        // echo '<pre>';
        // var_dump($validated);

        $img_name = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$img_name);

        $validated['image'] = 'images/'.$img_name;

        $validated['languages'] = implode(',',$request->languages);
        Student::create($validated);
        Session::flash('success','Data Inserted');
        return redirect('crud');
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
        $student_edit = Student::find($id);

        $student_edit->languages = explode(',',$student_edit->languages);
        return view('crud.edit',compact('student_edit'));
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

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' =>'required',
            'languages' => 'required',

        ]);

        $student_update = Student::find($id);

        if(!empty($request->image))
        {
            $existing_img = $student_update->image;


            // $trim = ltrim($existing_img,'images/');
            if(File::exists($existing_img)){
               File::delete(public_path($existing_img));
            }

            $update_img_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$update_img_name);
            $validated['image'] = 'images/'.$update_img_name;
            $validated['languages'] = implode(',',$request->languages);
            $student_update->update($validated);
        }else{
            $validated['languages'] = implode(',',$request->languages);
            $student_update->update($validated);
        }
        Session::flash('success','Data Updated');
        return redirect('crud');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $student_delete = Student::find($id);

       $student_delete->delete();

       $existing_img = $student_delete->image;

        if(File::exists($existing_img)){
            File::delete(public_path($existing_img));
        }
        Session::flash('success','Data Deleted');

        return redirect('crud');
    }
}
