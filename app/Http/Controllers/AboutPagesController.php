<?php

namespace App\Http\Controllers;

use App\models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutPagesController extends Controller
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
        $abouts = about::all();
        return view ('pages.abouts.list', compact('abouts'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function create()
    {
        return view('pages.abouts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'description' => 'required|string', 
        ]);

        $about = new About;
        $about->title1 = $request->title1;
        $about->title2= $request->title2;
        $about->description = $request->description;

        $about ->save();

        return redirect()->route('admin.abouts.create')->with('success','New About Created Successfully');

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
    
        $about = About::find($id);
         return view('pages.abouts.edit', compact('about'));
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

        $about = About::find($id);
        $about->title1 = $request->title1;
        $about->title2 = $request->title2;
        $about->description = $request->description;
        
        $about->save();

        return redirect()->route('admin.abouts.list')->with('success','About Updated Successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
     public function destroy(string $id)
     {
        $about = About::find($id);
       $about->delete();
       return redirect()->route('admin.abouts.list')->with('success','About deleted successfully');
     }
}
