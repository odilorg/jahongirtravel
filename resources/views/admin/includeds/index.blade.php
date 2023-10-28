@extends('admin.layouts.app')
@section('content')
    <div class="content">
        

        <!-- Basic -->
        
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Tour Included Items</h3>
                <div class="block-options">
                  <a class="btn btn-primary" href="{{ route('includeds.create') }}" role="button">Add Tour Included Items</a>
                 
                </div>
              </div>
                <div class="block-content">
                  <table class="table table-vcenter">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 50px;"></th>
                        <th>Included Item</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($includeds as $items )
                        <tr>
                            <th class="text-center" scope="row">{{ $items->id }}</th>
                            <td>{{ $items->included_item_name }}</td>
                            <td class="text-center">
                              <div class="btn-group">
                                
                                <a class="btn btn-info btn-sm" href="includeds/{{ $items->id }}/edit">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <form action="/includeds/{{ $items->id }}" method="post"
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

            



        

       





    </div>
@endsection
