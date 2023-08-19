<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Main;
use Symfony\Contracts\Service\Attribute\Required;

class MainPagesController extends Controller
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

    public function dashboard(){ 
        return view('pages.dashboard');
     }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = Main::first();
        return view('pages.main', compact('main'));

    }

    public function update(Request $request, $id)
    {
         $main = Main::find($id);
         $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
            'name'=>'required|string',
            'status'=>'required|string',
            'description' => 'required|string',
            'years'=>'required|integer',
            'projects'=>'required|integer',
            'companies'=>'required|integer',
        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;
        $main->name = $request->name;
        $main->status = $request->status;
        $main ->description = $request->description;
        $main->years = $request->years;
        $main->projects = $request->projects;
        $main->companies = $request->companies;


        if($request->file('bc_img')){
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }
        $main->save();

         return redirect()->route('admin.main')->with('success', "Main Page data has been updated successfully");
    }

}
