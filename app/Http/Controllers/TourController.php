<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Category;
use App\Models\Included;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store( Request $request)
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
            'tour_categories' => ['nullable'],
        ]);
      //  dd($attributes);
        $attributes['tour_description_details_file'] = request()->file('tour_description_details_file')->store('tour_description_details_file');

     
     
      
        $tour = Tour::create($attributes);
//this is to add category tour table data

$attributes_category_tour =  request()->validate([
    'tour_id' => ['integer'],
]);

$attributes_category_tour = $tour->id;
// /dd($attributes_category_tour);
$tourCategories[] = $request->input('tour_categories');
$includedItems[] = $request->input('includeditems');
foreach ($attributes['tour_categories'] as $key => $value) {
     DB::insert('INSERT INTO category_tour (tour_id, category_id) VALUES (?, ?)', array($attributes_category_tour, $value));
 }

 foreach ($attributes['includeditems'] as $key => $value) {

    DB::insert('INSERT INTO included_tour (tour_id, included_id) VALUES (?, ?)', array($attributes_category_tour, $value));
}

//dd($attributes_category_tour);
        
        
         session()->flash('success', 'Tour has been created');
                

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
        //dd($tour->includeds[0]['included_item_name']);
        return view('admin.tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $included_items = Included::all();
        $tour_categories = Category::all();
        
        return view('admin.tours.edit', compact('tour', 'included_items', 'tour_categories'));
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
