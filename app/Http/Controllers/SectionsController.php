<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
   
   public function section()
    {
    	$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
    }

    public function create()
    {
    	return view('sections.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' => 'required'
        ]);
        
    	$section = new Section;
    	$section->name = request()->name;
    	$section->is_active = request()->is_active;
    	$section->save();

        return redirect('/home/sections');
    }
}
