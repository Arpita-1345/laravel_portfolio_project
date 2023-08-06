<?php

namespace App\Http\Controllers;


use App\models\Portfolio;
use App\models\Main;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PortfolioPagesController extends Controller
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
        $portfolios = portfolio::all();
        return view ('pages.portfolio.list', compact('portfolios'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function create()
    {
        return view('pages.portfolio.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'description' => 'required|string', 
        ]);

        $portfolio = new portfolio;
        $portfolio->title1 = $request->title1;
        $portfolio->description = $request->description;

        $image_file = $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $portfolio->image = "storage/img/".$image_file->hashName();

        $portfolio->save();

        return redirect()->route('admin.portfolios.create')->with('success','New portfolio Created Successfully');

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
    
        $portfolios = Portfolio::get($id);
        return view('pages.portfolios.edit', compact('portfolios'));
     }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'description' => 'required|string',  
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->title1 = $request->title1;
        $portfolio->description = $request->description;

        if($request->file('image')){
            $image_file = $request->file('image');
            Storage::putFile('public/img/', $image_file);
            $portfolio->image = "storage/img/".$image_file->hashName();
        }
        
        $portfolio->save();

        return redirect()->route('admin.portfolios.list')->with('success','portfolio Updated Successfully');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
     public function destroy(string $id)
     {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('admin.education.list')->with('success','education deleted successfully');
     }
}