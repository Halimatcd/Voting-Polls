@extends('layouts.app')
    
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-12">
    
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Enter Polling Unit Details</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="/newPu" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="first-name-vertical">Polling Unit Id</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="polling_unit_id" placeholder="sender Name" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Party Abbreviation</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="party_abbreviation" placeholder="Sender number" />
                            </div>
                          <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Party Score</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="party_score" placeholder="Sender number" />
                            </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Entered By</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="entered_by_user" placeholder="Reciever number" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Date Entered</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="date_entered" placeholder="Item to be delivered" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">User IP Address</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="user_ip_address" placeholder="Pick up address" />
                            </div>
                        </div>
                    
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary me-1">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection