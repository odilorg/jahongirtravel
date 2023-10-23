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
                <form action="{{ route('includeds.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Category</label>
                                <input type="text" value="{{ old('included_item_name') }}"
                                    class="form-control  @error('included_item_name')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="included_item_name" placeholder="Tour Category">
                                @error('included_item_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>



        

       





    </div>
@endsection
