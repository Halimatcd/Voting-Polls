@extends('layouts.app')
@section('content')
    

    <div class="container" style="margin-top: 150px; width: 650px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Party Name</th>
                    <th>Party Score</th>
                </tr>
            </thead>
         @foreach($results as $result) 
            <tbody>
                <tr>
                    <td><span class="fw-bold">{{$result->party_abbreviation}}</span></td>
                <td><span class="fw-bold">{{$result->party_score}}</span></td>
                </tr>
            </tbody>
            @endforeach
          </table>  
          <p><b class="bg-dark text-white pt-1 pb-1 ps-3 pe-3">Total</b> : {{$results->sum('party_score')}}</p><br>
          <a href="/lga" class="btn btn-secondary btn-sm">Back</a>
    </div> 
  @endsection
