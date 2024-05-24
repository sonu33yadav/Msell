<?php

namespace App\Http\Controllers;

use App\Models\Courese;
use Illuminate\Http\Request;

class CoureseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCourse(Request $req)
    {
        dd($req);
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
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function show(Courese $courese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function edit(Courese $courese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courese $courese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courese $courese)
    {
        //
    }
}