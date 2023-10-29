@extends('admin.layouts.app')
@section('content')
    <div class="content">
        

        <!-- Basic -->
        
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Tours</h3>
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
                            <td >
                              <div class="btn-group">
                                <a class="btn btn-info btn-sm" href="tours/{{ $tour->id }}">
                                  <i class="fas fa-folder"></i>
                                  View
                                </a>
                                <a class="btn btn-info btn-sm" href="tours/{{ $tour->id }}/edit">
                                  <i class="fas fa-pencil-alt"></i>
                                  Edit
                                </a>
                                <form action="/tours/{{ $tour->id }}" method="post"
                                  class="float-left">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm">
                                      <i class="fas fa-trash">
                                      </i>
                                      Delete
                                  </button>
                                </form>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="pagination-block">
                    {{ $tours->links('admin.layouts.paginationlinks') }}
                </div>
                </div>
              </div>
        



        

       





    </div>
@endsection
