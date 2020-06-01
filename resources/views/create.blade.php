@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
<div class="container col-lg-4">
    <div>
        <div class="column">
            <div class="panel panel-default is-warning">
                <div class="panel-heading">New Cremation</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="form-control">
                        <div class="row">
                            <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="field column">
                                    <label class="label">Owner's Name</label>
                                    <div class="control">
                                        <input class="input" type="text" name="owner_name" placeholder="First & Last Name">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Owner's Phone</label>
                                    <div class="control">
                                        <input class="input" type="text" name="owner_phone" placeholder="(555)555-5555">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Companion's Name</label>
                                    <div class="control">
                                        <input class="input" type="text" name="pet_name" placeholder="Pet's Name">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Color & Breed</label>
                                    <div class="control">
                                        <input class="input" type="text" name="color_breed" placeholder="What is the companion's coat color and breed?">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Weight</label>
                                    <div class="control">
                                        <input class="input" type="text" name="weight" placeholder="How many Lbs.?">
                                    </div>
                                </div>


                                <div class="field column">
                                    <label class="label">Returning To</label>
                                    <div class="control">
                                        <input class="input" type="text" name="color_breed" placeholder="What is the companion's coat color and breed?">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Shipping Address</label>
                                    <div class="control">
                                        <input class="input" type="text" name="shipping_address" placeholder="Where is APMS mailing the final product to?">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <div class="select is-multiple is-warning is-large" hidden="true">
                                            <label class="label">Cremation Type</label>
                                            <select multiple size="5">
                                                <option value="true_private_cremation">True Private Cremation</option>
                                                <option value="group_cremation">Group Cremation</option>
                                                <option value="partitioned_cremation">Partitioned Cremation</option>
                                                <option value="good_samaritan">Good Samaritan</option>
                                                <option value="vet_clinic_pkg">Vet Clinic PKG</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Paw Print Type</label>
                                    <div class="control">
                                        <input class="input" type="text" name="paw_print" placeholder="What type of PawPrint?">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Urn Type</label>
                                    <div class="control">
                                        <input class="input" type="text" name="urn_type" placeholder="What type of Urn?">
                                    </div>
                                </div>

                                <div class="field column">
                                    <label class="label">Nameplate Type</label>
                                    <div class="control">
                                        <input class="input" type="text" name="nameplate_type" placeholder="What type of nameplate?">
                                    </div>
                                </div>

                                <div class="hr-line-dashed field"></div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Service Options</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="service_options[]" value="shipping&handling" id="shipping&handling"> Shipping & Handling
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="service_options[]" value=".70-per-lb" id=".70-per-lb"> .70/lb.
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="service_options[]" value="expedited-cremation" id="expedited_cremation"> Expedited Cremation
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
                                <div class="field is-grouped is-grouped-right">
                                    <p class="control">
                                        <a class="button is-primary column">
                                            Submit
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-light column">
                                            Cancel
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
 </div>
    </div>
        </div>
@endsection
