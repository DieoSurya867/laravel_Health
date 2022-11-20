<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bmi = Bmi::all();
        return view('pages.admin.bmi', compact('bmi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function show(Bmi $bmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function edit(Bmi $bmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bmi $bmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bmi  $bmi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bmi $bmi)
    {
        //
    }
}
