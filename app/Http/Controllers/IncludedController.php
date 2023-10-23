<?php

namespace App\Http\Controllers;

use App\Models\Included;
use Illuminate\Http\Request;

class IncludedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $includeds = Included::all();
        return view('admin.includeds.index', compact('includeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.includeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $attributes =  request()->validate([
            'included_item_name' => ['required', 'max:1055'],
        ]);
        (Included::create($attributes));
        
        session()->flash('success', 'Tour category has been created');
        session()->flash('type', 'Category Creation');
        

       return redirect('/includeds');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Included  $included
     * @return \Illuminate\Http\Response
     */
    public function show(Included $included)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Included  $included
     * @return \Illuminate\Http\Response
     */
    public function edit(Included $included)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Included  $included
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Included $included)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Included  $included
     * @return \Illuminate\Http\Response
     */
    public function destroy(Included $included)
    {
        //
    }
}
