<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Etudiant;
use Session;

class HomeController extends Controller
{
    public function cours()
    {
        if (!Session::has('cours')) {
            # code...
            return view ('cours-single');
        }
        if (!Session::has('cours')) {
            # code...
            return view ('cours');
        }
        
        $cours = Cours::where('status',1)->get();
        return view ('cours')->with('cours',$cours);
    }

    public function about()
    { return view('about');
    }

    public function home()
    { $cours = Cours::where('status',1)->get();
        return view ('home')->with('cours',$cours);
    }

    
    public function contact()
    { 
        return view('contact');
    }
   
    public function events()
    { return view('events');
    }
    public function aide()
    { return view('aide');
    }
    public function eventsingle()
    { return view('event-single');
    }
   

    
    
}
