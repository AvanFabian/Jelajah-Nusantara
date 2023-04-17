<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advice;

class AdviceController extends Controller
{
    // Store the new advice in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'advice' => 'required',
        ]);

        $advice = Advice::create($validatedData);

        return back()->with('success', 'Advice created successfully.');
    }
    // Get all advice from the database
    // public function index()
    // {
    //     $advice = Advice::select('id', 'name', 'advice')->get();
    //     return view('advice.index', compact('advice'));
    // }

    // Show all advice
    public function history()
    {
        $history = Advice::select('name', 'advice', 'created_at')->orderBy('created_at', 'desc')->get();
        return view('advice.history', compact('history'));
    }

    public function edit($id)
    {
        $advices = Advice::findOrFail($id);
        // redirect to edit page with the data
        return redirect()->route('update-advice', compact('advices'));
    }
    

    public function update(Request $request, $id)
    {
        $advice = Advice::find($id);
        $advice->advice = $request->input('advice');
        $advice->save();
        return redirect('/home/pulau')->with('success', 'Advice updated successfully');
    }
    

    public function destroy($id)
    {
        $advice = Advice::find($id);
        $advice->delete();

        return redirect()->route('update-advice')->with('success', 'Advice deleted successfully');
    }
}