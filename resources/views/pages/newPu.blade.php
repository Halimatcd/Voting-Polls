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
                                <input type="text" id="first-name-vertical" class="form-control" name="polling_unit_id" placeholder="Polling Unit Id" />
                            </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Ward Id</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="ward_id" placeholder="Ward Id" />
                            </div>
                          <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Lga Id</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="lga_id" placeholder="Lga Id" />
                            </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Unique Ward Id</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="uniquewardid" placeholder="Unique Ward Id" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Polling Unit Number</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="polling_unit_number" placeholder="Polling Unit Number" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Polling Unit Name</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="polling_unit_name" placeholder="polling unit name" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Polling Unit Description</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="polling_unit_description" placeholder="polling_unit_description" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Latitude</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="lat" placeholder="latitude" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Longitude</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="user_ip_address" placeholder="Pick up address" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">Entered_by_user</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="entered_by_user" placeholder="Entered by" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label" for="contact-info-vertical">User_Ip_Address</label>
                                <input type="text" id="contact-info-vertical" class="form-control" name="user_ip_address" placeholder="user ip address" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary me-1">Submit</button>

                        </div>
                    </div>
                </form
            </div>
        </div>
    </div>
</div>
@endsection