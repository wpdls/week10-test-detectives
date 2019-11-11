<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detective;
use App\Crime;

class DetectiveController extends Controller
{
    //
    public function show($detective_slug)
    {
        $detective = \App\Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }

    public function index() {
        
        $detectives = Detective::orderBy('name', 'asc')->get();
        
        return view('detective/index', compact('detectives'));
    }

    public function create() {
        $crime = new Crime;

        return view('detective/show', compact('crimes'));
    }

    public function store(Request $request) {
        $crime = Crime::create($request->all());

        return redirect(action('DetectiveController@index'));
    }
}
