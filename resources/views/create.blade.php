@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">New Cremation</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group"><label class="col-sm-2 control-label">Owner's Name</label>
                                    <div class="col-sm-3"><input type="text" name="owner_name" placeholder="First & Last Name" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Owner's Phone</label>
                                    <div class="col-sm-2"><input type="text" name="owner_phone" placeholder="(555)555-5555" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Companion's Name</label>
                                    <div class="col-sm-3"><input type="text" name="pet_name" placeholder="Paco" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Color & Breed</label>
                                    <div class="col-sm-3"><input type="text" name="color_breed" placeholder="Black Pug" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6"><input type="text" name="weight" placeholder="12 lbs." class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Return Companion To</label>
                                    <div class="col-sm-6"><input type="text" name="return_to" placeholder="Clinic or Owner?" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Service Options</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="service_options[]" value="shipping&handling" id="shipping&handling"> Shipping & Handling
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="service_options[]" value=".70-per-lb" id=".70-per-lb"> .70/lb.
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="service_options[]" value="expedited-cremation" id="mushrooms"> Expedited Cremation
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="service_options[]" value="vds-transfer" id="vds-transfer"> VDS Transfer
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="service_options[]" value="witness-cremation" id="inlineCheckbox3"> Witness Cremation
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Extra Notes</label>

                                    <div class="col-sm-9"><input type="text" name="extra_notes" placeholder="Special Clinical Notes go here" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">

                                        <button class="btn btn-primary" type="submit">Submit</button>

                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
