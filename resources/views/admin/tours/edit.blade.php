@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <h2 class="content-heading">Add Tour</h2>

        <!-- Basic -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Basic</h3>
            </div>
            <div class="block-content">
                <form action="/tours/{{ $tour->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row push">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Title</label>
                                <input type="text" value="{{ old('tour_title', $tour->tour_title) }}"
                                    class="form-control  @error('tour_title')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_title" placeholder="Tour Title">
                                @error('tour_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_code">Tour Code</label>
                                <input type="text" value="{{ old('tour_code', $tour->tour_code) }}"
                                    class="form-control  @error('tour_code')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_code" placeholder="Tour Code">
                                @error('tour_code')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Duration</label>
                                <input type="text" value="{{ old('tour_duration', $tour->tour_duration) }}"
                                    class="form-control  @error('tour_duration')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_duration" placeholder="Text Duration">
                                @error('tour_duration')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description_name">Tour Description name</label>
                                <input type="text" value="{{ old('tour_description_name', $tour->tour_description_name) }}"
                                    class="form-control  @error('tour_description_name')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_description_name" placeholder="Tour Description name">
                                @error('tour_description_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description">Tour Description</label>
                                <textarea class="form-control  
                                @error('tour_description')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_description" rows="4" placeholder="Tour Description">{{ old('tour_description', $tour->tour_description) }}
                                </textarea>
                                @error('tour_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description_departure_return">Tour Start End Points</label>
                                <textarea  class="form-control  @error('tour_description_departure_return')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_description_departure_return" rows="4" placeholder="Tour Start End Points"> {{ old('tour_description_departure_return', $tour->tour_description_departure_return) }}
                                </textarea>
                                @error('tour_description_departure_return')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Departure Time</label>
                                <input type="text" value="{{ old('tour_description_departure_time', $tour->tour_description_departure_time) }}"
                                    class="form-control  @error('tour_description_departure_time')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_description_departure_time"
                                    placeholder="Tour Departure Time">
                                @error('tour_description_departure_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description_included">Tour Included</label>
                                <textarea  class="form-control  @error('tour_description_included')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_description_included" rows="4" placeholder="Tour Included">  {{ old('tour_description_included', $tour->tour_description_included) }}
                                </textarea>
                                @error('tour_description_included')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description_not_included">Tour not Included</label>
                                <textarea  class="form-control  @error('tour_description_not_included')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_description_not_included" rows="4" placeholder="Tour not Included">{{ old('tour_description_not_included', $tour->tour_description_not_included) }}
                                </textarea>
                                @error('tour_description_not_included')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_description_details_file">Tour File</label>
                                <input type="file" value="{{ old('tour_description_details_file', $tour->tour_description_details_file) }}" name="tour_description_details_file"
                                    class="form-control @error('tour_description_details_file') {{ 'is-invalid' }} @enderror"
                                    id="exampleInputEmail1">
                                @error('tour_description_details_file')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_itinarary">Tour Itinarary</label>
                                <textarea  class="form-control  @error('tour_itinarary')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_itinarary" rows="4" placeholder="Tour Itinarary">{{ old('tour_itinarary', $tour->tour_itinarary) }}
                                </textarea>
                                @error('tour_itinarary')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="tour_location_link">Tour Location</label>
                                <input type="text" value="{{ old('tour_location_link', $tour->tour_location_link) }}"
                                    class="form-control  @error('tour_location_link')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_location_link" placeholder="Tour Location">
                                @error('tour_location_link')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="form-label" for="tour_location_link">Tour Includes</label>
                            <div class="mb-4">
                                @foreach ($included_items as $items)
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input"   value="{{ $items->id }}" id="example-checkbox-inline1 {{ $items->id }}" name="includeditems[]"  @if(is_array(old('includeditems')) && in_array($items->id, old('includeditems'))) checked @endif >
                                    <label class="form-check-label" for="example-checkbox-inline1 {{ $items->id }}">{{ $items->included_item_name }}</label>
                                </div>
                                @endforeach
                            </div>
                            <label class="form-label" for="tour_location_link">Tour Categories</label>
                            <div class="mb-4">
                                @foreach ($tour_categories as $items)
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input"   value="{{ $items->id }}" id="example-checkbox-inline1 {{ $items->tour_category_name }}" name="tour_categories[]"  @if(is_array(old('tour_categories')) && in_array($items->id, old('tour_categories'))) checked @endif >
                                    <label class="form-check-label" for="example-checkbox-inline1 {{ $items->tour_category_name }}">{{ $items->tour_category_name }}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>



        

       





    </div>
@endsection
