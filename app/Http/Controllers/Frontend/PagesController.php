<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Main;
use App\models\Contact;
use App\Models\Education;
use App\Models\Portfolio;


class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $educations= Education::all();
        $portfolios=Portfolio::all();
        $contact= Contact::first();
        return view('pages.arpi', compact('main',  'educations', 'portfolios','contact'));
     }
    
}
