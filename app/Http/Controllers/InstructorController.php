<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\instructor;
use Illuminate\View\View;

class instructorController extends Controller
{

    public function index(): View
    {
        $instructor = instructor::all();
        return view ('instructor.index')->with('instructor', $instructor);
    }

 
    public function create(): View
    {
        return view('instructor.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        instructor::create($input);
        return redirect('instructor')->with('flash_message', 'instructor Addedd!');
    }

    public function show(string $id): View
    {
        $instructor = instructor::find($id);
        return view('instructor.show')->with('instructor', $instructor);
    }

    public function edit(string $id): View
    {
        $instructor = instructor::find($id);
        return view('instructor.edit')->with('instructor', $instructor);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $instructor = instructor::find($id);
        $input = $request->all();
        $instructor->update($input);
        return redirect('instructor')->with('flash_message', 'instructor Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        instructor::destroy($id);
        return redirect('instructor')->with('flash_message', 'instructor deleted!'); 
    }
}