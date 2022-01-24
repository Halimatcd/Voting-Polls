@extends('layouts.app')
    
@section('content')
    
    <div class="card-body">

    </div>
    <div class="table-responsive">
      {{ $results->links() }}  <a href="/scores" class="btn btn-secondary btn-sm">scores</a>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>State</th>
                  <th>Lga ID</th>
                    <th>Polling Unit ID</th>
                    <th>Polling Unit No</th>
                    <th>Polling Unit Name</th>
                    <th>Polling Unit Description</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
         @foreach($results as $result) 
            <tbody>
                <tr>
                  <td>
                   DELTA
                </td>
                <td><span class="fw-bold">{{$result->lga_id}}</span></td>
                    <td>
                      {{$result->polling_unit_id}}
                    </td>
                    <td>
                      {{$result->polling_unit_number}}
                    </td>
                    <td><span class="fw-bold">{{$result->polling_unit_name}}</span></td>
                    <td>{{$result->polling_unit_description}}</td>
                    <td>
                        <span class="fw-bold">{{$result->lat}}</span>
                    </td>
                    <td><span class="fw-bold">{{$result->long}}</span></td>
                    <td>
                    </td>
                </tr>
    
            </tbody>
            @endforeach
            
          </table>  
         
    </div>
    @endsection


