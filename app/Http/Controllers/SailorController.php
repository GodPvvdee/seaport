<?php

namespace App\Http\Controllers;

use App\Models\Sailor;
use Illuminate\Http\Request;

class SailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ажилтан бүртгэх 
       return view("sailor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ажилтан хадгалах

       // dd($request->all());
         Sailor::create($request->all());
         return redirect()->to('/sailor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sailor  $sailor
     * @return \Illuminate\Http\Response
     */
    public function show(Sailor $sailor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sailor  $sailor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sailor $sailor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sailor  $sailor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sailor $sailor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sailor  $sailor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sailor $sailor)
    {
        //
    }
}
