@extends('admin.layouts.app')
@section('content')
    <div class="content">
        

        <!-- Basic -->
        
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Block Form</h3>
                <div class="block-options">
                  <a class="btn btn-primary" href="{{ route('tours.index') }}" role="button">Tours </a>
                </div>
              </div>
                <div class="block-content">
                  <table class="table table-vcenter">
                    <thead>
                      <tr>
                        <th>Tour Title</th>
                        <th>Tour Code</th>
                        <th>Duration</th>
                        <th>Description Name</th>
                        <th>Description</th>
                        <th>Departure Return</th>
                        <th>Departure Time</th>
                        <th>Tour Itinarary</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $tour->tour_title }}</td>
                            <td>{{ $tour->tour_code }}</td>
                            <td>{{ $tour->tour_duration }}</td>
                            <td>{{ $tour->tour_description }}</td>
                            <td>{{ $tour->tour_description_name }}</td>
                            <td>{{ $tour->tour_description_departure_return }}</td>
                            <td>{{ $tour->tour_description_departure_time }}</td>
                            <td>{{ $tour->tour_itinarary }}</td>
                            <td>9</td>
                          </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        



        

       





    </div>
@endsection
