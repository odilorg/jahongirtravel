<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use App\Models\Included;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
       // dd($tours);
        return view('admin.tours.index', compact('tours'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $included_items = Included::all();
        $tour_categories = Category::all();
      // dd($included_items);
      //return view('admin.tours.create');
        return view('admin.tours.create', compact('included_items', 'tour_categories'));
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
            'tour_title' => ['required', 'max:255'],
            'tour_code' => ['required', 'max:255'],            
            'tour_duration' => ['required', 'max:255'],
            'tour_description_name' => ['nullable', 'max:555'],
            'tour_description' => ['required', 'max:3555'],
            'tour_description_departure_return' => ['required', 'max:255'],
            'tour_description_departure_time' => ['required', 'max:255'],
            'tour_description_included' => ['required', 'max:1555'],
            'tour_description_not_included' => ['required', 'max:1555'],
            'tour_description_details_file' => ['required','nullable', 'file'],
            'tour_itinarary' => ['required', 'max:3555'],
            'tour_location_link' => ['required', 'max:1255'],
            'includeditems' => ['nullable'],

            
        ]);
     // dd($attributes);
     
      $attributes['tour_description_details_file'] = request()->file('tour_description_details_file')->store('tour_description_details_file');
        Tour::create($attributes);
        
         session()->flash('success', 'Tour has been created');
         session()->flash('type', 'Tour Creation');
         

        return redirect('/tours');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
