@extends('layouts.app')
    
@section('content')
    
    <div class="card-body">
    </div>
    {{ $results->links() }}
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Polling unit ID</th>
                  <th>Party Name</th>
                    <th>Party Score</th>
                    <th>Entered By</th>
                    <th>IP Address</th>
                </tr>
            </thead>
         @foreach($results as $result) 
            <tbody>
                <tr>
                    <td><span class="fw-bold">{{$result->polling_unit_id}}</span></td>
                <td><span class="fw-bold">{{$result->party_abbreviation}}</span></td>
                <td>{{$result->party_score}}</td>
                <td>{{$result->entered_by_user}}</td>
                <td>{{$result->user_ip_address}}</td>
                </tr>
    
            </tbody>
            @endforeach
          </table>  
          <a href="/polling_units" class="btn btn-secondary btn-sm">Back</a>
    </div>
    @endsection


