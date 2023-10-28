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
       // $includeds = Included::find($inc) 
        return view('admin.includeds.edit', compact('included'));
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
      
      
        $attributes =  request()->validate([
            'included_item_name' => ['required', 'max:1055'],
        ]);
        $included->update($attributes);
        session()->flash('updated', 'Included Items has been updated');
        return redirect('includeds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Included  $included
     * @return \Illuminate\Http\Response
     */
    public function destroy(Included $included)
    {
        $included->delete();
        session()->flash('delete', 'Included Items has been Deleted');
        return redirect('includeds');
    }
}
