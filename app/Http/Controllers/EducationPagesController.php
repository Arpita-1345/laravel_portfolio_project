<?php

namespace App\Http\Controllers;

use App\models\Education;
use App\models\Main;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EducationPagesController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function list()
    {
        $educations = education::all();
        return view ('pages.education.list', compact('educations'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function create()
    {
        $educations = education::first();
        return view('pages.education.create', compact('educations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'description' => 'required|string', 
        ]);

        $education = new Education;
        $education->title1 = $request->title1;
        $education->title2= $request->title2;
        $education->description = $request->description;

        // $image_file = $request->file('image');
        // Storage::putFile('public/img/', $image_file);
        // $education->image = "storage/img/".$image_file->hashName();

        $education->save();

        return redirect()->route('admin.education.create')->with('success','New Education Created Successfully');

    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
     public function edit(string $id)
     {
    
        $education = Education::find($id);
         return view('pages.education.edit', compact('education'));
     }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'description' => 'required|string',  
        ]);

        $education = Education::find($id);
        $education->title1 = $request->title1;
        $education->title2 = $request->title2;
        $education->description = $request->description;

        if($request->file('image')){
            $image_file = $request->file('image');
            Storage::putFile('public/img/', $image_file);
            $education->image = "storage/img/".$image_file->hashName();
        }
        
        $education->save();

        return redirect()->route('admin.education.list')->with('success','Education Updated Successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
     public function destroy(string $id)
     {
        $education = Education::find($id);
       $education->delete();
       return redirect()->route('admin.education.list')->with('success','education deleted successfully');
     }
}
