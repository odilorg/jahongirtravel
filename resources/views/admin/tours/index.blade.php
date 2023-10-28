@extends('admin.layouts.app')
@section('content')
    <div class="content">
        

        <!-- Basic -->
        
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Block Form</h3>
                <div class="block-options">
                  <a class="btn btn-primary" href="{{ route('tours.create') }}" role="button">Add Tour </a>
                </div>
              </div>
              @if (session()->has('success'))
              <div class="alert alert-primary" role="alert">
                  {{ session()->get('success') }}
               </div>
            @elseif (session()->has('delete'))
            <div class="alert alert-danger" role="alert">
              {{ session()->get('delete') }}
           </div>
           @elseif (session()->has('updated'))
            <div class="alert alert-success" role="alert">
              {{ session()->get('updated') }}
           </div>
              @endif

                <div class="block-content">
                  <table class="table table-vcenter">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 50px;"></th>
                        <th>Tour Title</th>
                        <th>Tour Code</th>
                        <th>Tour Duration</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour )
                        <tr>
                            <th class="text-center" scope="row">{{ $tour->id }}</th>
                            <td>{{ $tour->tour_title }}</td>
                            <td>{{ $tour->tour_code }}</td>
                            <td>{{ $tour->tour_duration }}</td>
                            <td class="text-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                    <i class="fa-regular fa-eye"></i>
                                <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                  <i class="fa fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        



        

       





    </div>
@endsection
