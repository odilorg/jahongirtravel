@extends('admin.layouts.app')
@section('content')
    <div class="content">
        

        <!-- Basic -->
        
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Tour Categories</h3>
                </div>
                <div class="block-content">
                  <table class="table table-vcenter">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 50px;"></th>
                        <th>Category Name</th>
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
