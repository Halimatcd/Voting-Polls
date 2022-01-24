@extends('layouts.app')
    
@section('content')
    
    <div class="card-body">

    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>Party ID</th>
                    <th>Party Name</th>
                </tr>
            </thead>
         @foreach($results as $result) 
            <tbody>
                <tr>
                <td><span class="fw-bold">{{$result->partyid}}</span></td>
                    <td>
                      {{$result->partyname}}
                    </td>
                </tr>
    
            </tbody>
            @endforeach
          </table>  
         
    </div>
    @endsection


