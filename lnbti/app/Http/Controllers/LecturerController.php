<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();
        return view ('Lecturer.index')->with('lecturers', $lecturers);
    }

    public function create()
    {
        return view('Lecturer.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Lecturer::create($input);
        return redirect('lecturer')->with('flash_message', 'Lecturer Addedd!');
    }

    public function show(Lecturer $lecturer)
    {
        return view('Lecturer.show')->with('lecturers', $lecturer);
    }

    public function edit(Lecturer $lecturer)
    {
        return view('Lecturer.edit')->with('lecturers', $lecturer);
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $input = $request->all();
        $lecturer->update($input);
        return redirect('lecturer')->with('flash_message', 'Lecturer Updated!');
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect('lecturer')->with('flash_message', 'Lecturer deleted!');
    }
}
