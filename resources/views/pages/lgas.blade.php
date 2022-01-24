@extends('layouts.app')
    
@section('content')
    
    <div class="card-body">

    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>State</th>
                  <th>Lga ID</th>
                    <th>Lga Name</th>
                    <th>Lga Description</th>
                    <th>Scores</th>
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
                      {{$result->lga_name}}
                    </td>
                    <td>
                      {{$result->lga_description}}
                    </td>
                    <td>
                      <a href="{{route('lga.results', ['id' => $result->lga_id])}}" class="btn btn-secondary btn-sm">scores</a>
                    </td>
                </tr>
    
            </tbody>
            @endforeach
          </table>  
         
    </div>
    @endsection


