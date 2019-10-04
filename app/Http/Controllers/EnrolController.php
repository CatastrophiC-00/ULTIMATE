<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class EnrolController extends Controller
{
    public function index()
    {
        return view('home');
    }
   public function subject()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }

    public function create()
    {
    	return view('subjects.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);
        
    	$subject = new Subject;
    	$subject->name = request()->name;
    	$subject->save();

        return redirect('/home/subjects');
    }
}
