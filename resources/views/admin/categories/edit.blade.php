@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <h2 class="content-heading">Add Tour</h2>

        <!-- Basic -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Update Inluded Items</h3>
            </div>
            <div class="block-content">
                <form action="/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row push">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Category</label>
                                <input type="text" value="{{ old('tour_category_name', $category->tour_category_name ) }}"
                                    class="form-control  @error('tour_category_name')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_category_name" placeholder="Tour Category">
                                @error('tour_category_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>


                </form>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>



        

       





    </div>
@endsection
