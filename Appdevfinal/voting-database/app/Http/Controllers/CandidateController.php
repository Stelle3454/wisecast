<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Candidate::all(); 
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'candidatename' => 'required',
            'position' => 'required',
            'email' => 'required',
            'partylist' => 'required',
        ]);
    
        $candidate = Candidate::create($validatedData);
    
        return response()->json($candidate, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        $validatedData = $request->validate([
            'candidatename' => 'required',
            'position' => 'required',
            'email' => 'required',
            'partylist' => 'required',
        ]);
    
        $candidate->update($validatedData);
    
        return response()->json($candidate, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
        $candidate->delete();
        return response()->json(null,204);
    }
}
