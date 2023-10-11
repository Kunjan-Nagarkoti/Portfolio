<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required|max:255',
            // 'body' => 'required',
            'name' => 'required',
            'country' => 'required',
            'message' => 'required'

        ]);
        portfolio::create($request->all());
        return redirect()->back()->with('success', 'Product created successfully.');
    }

    /*
      * Display the specified resource.
      */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portfolio $portfolio)
    {
        //
    }
}
