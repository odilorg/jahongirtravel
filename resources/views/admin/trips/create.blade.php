@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <h2 class="content-heading">Add Trip</h2>

        <!-- Basic -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Basic</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('trips.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Title</label>
                                <input type="text" value="{{ old('trip_title') }}"
                                    class="form-control  @error('trip_title')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_title" placeholder="Tour Title">
                                @error('trip_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_code">Tour Code</label>
                                <input type="text" value="{{ old('trip_code') }}"
                                    class="form-control  @error('trip_code')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_code" placeholder="Tour Code">
                                @error('trip_code')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Duration</label>
                                <input type="text" value="{{ old('trip_duration') }}"
                                    class="form-control  @error('trip_duration')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_duration" placeholder="Text Duration">
                                @error('trip_duration')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description_name">Tour Description name</label>
                                <input type="text" value="{{ old('trip_description_name') }}"
                                    class="form-control  @error('trip_description_name')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_description_name" placeholder="Tour Description name">
                                @error('trip_description_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description">Tour Description</label>
                                <textarea class="form-control  @error('trip_description')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="trip_description" rows="4" placeholder="Tour Description"></textarea>
                                @error('trip_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description_departure_return">Tour Start End Points</label>
                                <textarea class="form-control  @error('trip_description_departure_return')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="trip_description_departure_return" rows="4" placeholder="Tour Start End Points"></textarea>
                                @error('trip_description_departure_return')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Departure Time</label>
                                <input type="text" value="{{ old('trip_description_departure_time') }}"
                                    class="form-control  @error('trip_description_departure_time')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_description_departure_time"
                                    placeholder="Tour Departure Time">
                                @error('trip_description_departure_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description_included">Tour Included</label>
                                <textarea class="form-control  @error('trip_description_included')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="trip_description_included" rows="4" placeholder="Tour Included"></textarea>
                                @error('trip_description_included')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description_not_included">Tour not Included</label>
                                <textarea class="form-control  @error('trip_description_not_included')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="trip_description_not_included" rows="4" placeholder="Tour not Included"></textarea>
                                @error('trip_description_not_included')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_description_details_file">Tour File</label>
                                <input type="file" value="{{ old('trip_description_details_file') }}" name="trip_description_details_file"
                                    class="form-control @error('trip_description_details_file')
                {{ 'is-invalid' }} @enderror"
                                    id="exampleInputEmail1">
                                @error('trip_description_details_file')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_itinarary">Tour Itinarary</label>
                                <textarea class="form-control  @error('trip_itinarary')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="trip_itinarary" rows="4" placeholder="Tour Itinarary"></textarea>
                                @error('trip_itinarary')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="trip_location_link">Tour Location</label>
                                <input type="text" value="{{ old('trip_location_link') }}"
                                    class="form-control  @error('trip_location_link')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="trip_location_link" placeholder="Tour Location">
                                @error('trip_location_link')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit">Submit</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>



        

       





    </div>
@endsection
