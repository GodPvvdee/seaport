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

        $sailors = Sailor::all();
        return view('index', compact('sailors'));

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

//       dd($request->all());
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
        return view('show', compact('sailor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sailor  $sailor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sailor $sailor)
    {
//        dd($sailor);
        return view('edit', compact('sailor'));
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
        //dd($sailor);
        //Sailor::update($request->all());

        $sailor->sailor_name = $request->sailor_name;
        $sailor->date_of_birth = $request->date_of_birth;
        $sailor->marital_status = $request->marital_status;

        $sailor->address = $request->address;
        $sailor->height = $request->height;
        $sailor->weight = $request->weight;

        $sailor->blood_type = $request->blood_type;
        $sailor->shoe_size = $request->shoe_size;
        $sailor->job_status = $request->job_status;
        $sailor->save();


        //return redirect()->route('contact.index');
        return redirect()->to('/sailor');
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
        $sailor->delete();
        return redirect()->to('/sailor');
    }
}
