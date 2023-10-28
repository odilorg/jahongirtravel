<?php

namespace App\Http\Controllers;

use App\Models\Notincluded;
use Illuminate\Http\Request;

class NotincludedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notincludeds = Notincluded::all();
        return view('admin.notincludeds.index', compact('notincludeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notincludeds.create');
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
            'notincluded_item_name' => ['required', 'max:1055'],
        ]);
    //   dd($attributes);
        (Notincluded::create($attributes));
        session()->flash('success', 'Not included item has been created');
       return redirect('/notincludeds'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notincluded  $notincluded
     * @return \Illuminate\Http\Response
     */
    public function show(Notincluded $notincluded)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notincluded  $notincluded
     * @return \Illuminate\Http\Response
     */
    public function edit(Notincluded $notincluded)
    {
        return view('admin.notincludeds.edit', compact('notincluded'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notincluded  $notincluded
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notincluded $notincluded)
    {
        
        $attributes =  request()->validate([
            'notincluded_item_name' => ['required', 'max:1055'],
        ]);
        $notincluded->update($attributes);
        session()->flash('updated', 'Not Included Items has been updated');
        return redirect('notincludeds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notincluded  $notincluded
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notincluded $notincluded)
    {
        $notincluded->delete();
        session()->flash('delete', 'Not Included Items has been Deleted');
        return redirect('notincludeds');
    }
}
