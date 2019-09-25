@extends('layouts.recruiter')

@section('content')
    <div class="col-lg-9 column">
        <div class="padding-left">
            <div class="profile-title" id="mp">
                <h3>Post new Job</h3>
            </div>
            <div class="profile-form-edit">
                <form method="POST" action="storeNewJob"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{--Job title--}}
                        <div class="col-lg-12">
                            <span class="pf-title">Job Title</span>
                            <div class="pf-field">
                                <input type="text" name="job-title" id="jobtitle" placeholder="Job Title" class="form-control @error('jobTitle') is-invalid @enderror" required  />
                                @error('jobTitle')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{--job Description name=job_des"--}}
                        <div class="col-lg-12">
                            <div class="pf-field">
                                <span class="pf-title">job Description</span>
                                <textarea name="summernoteInput"  id="summernote" rows="5" class=" form-control @error('job_des') is-invalid @enderror"  required></textarea>
                                @error('job_des')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{--Start Date--}}
                        <div class="col-lg-6">
                            <span class="pf-title">Start Date</span>
                            <div class="pf-field">
                                <input id="startDate" type="text" name="start-date" class="form-control datepicker @error('startDate') is-invalid @enderror"  required />
                                @error('startDate')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{--expiryDate--}}
                        <div class="col-lg-6">
                            <span class="pf-title">Expiry Date</span>
                            <div class="pf-field">
                                <input id="expiryDate" name="end-date" type="text" class="form-control datepicker @error('endDate') is-invalid @enderror"  required />
                                @error('endDate')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        {{--Get Country--}}
                        <div class="dropdown-field col-lg-6">
                            <span class="pf-title">Country</span>
                            <select name="countryId" id="country_id" class="form-control input-group-lg chosen" data-dependant="City" >
                                <option value="-1">Select a Country</option>
                                @foreach($country_list as $countries)
                                    <option value="{{$countries->id}}">{{$countries->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{--Get City--}}
                        <div class="dropdown-field col-lg-6">
                            <span class="pf-title">City</span>
                            <select name="cityID" id="cityID" class="cityNames form-control input-group-lg">
                                <option value="0" disabled="true" selected="true" ></option>
                            </select>
                        </div>
                        {{--Job industry--}}
                        <div class="col-lg-6">
                            <span class="pf-title">Job Industry</span>
                            <select name="industy" id="industries" class="form-control input-group-lg chosen">
                                <option value="">Select Job Industry</option>
                                @foreach($industries_list as $industry)
                                    <option value="{{$industry->industry_id}}">{{$industry->industry_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{--Job function--}}
                        <div class="col-lg-6">
                            <span class="pf-title">Job Function</span>
                            <select name="function" id="functions" class="form-control input-group-lg">
                                <option value="">Select job Function</option>
                            </select>
                            @error('City')
                            <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                    {{--Job location--}}
                    <div class="col-lg-12">
                        <span class="pf-title">Job location</span>
                        <div class="form-group">
                            <input type="text" id="address-input" name="address_address" class="form-control map-input @error('mapInput') is-invalid @enderror" required>
                            <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                            <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                            <input type="hidden" name="address_address" id="address-address" value="" />
                            @error('mapInput')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="address-map-container" style="width:100%;height:100%; ">
                            <div style="width: 100%; height:300px;" id="address-map"></div>
                        </div>
                    </div>
                    {{--submit button--}}
                    <div class="col-lg-6">
                        <button type="submit" id="createNewJobbtn">Post new Job</button>
                    </div>
                    {{ csrf_field() }}
                </form> <!--End of the form-->
            </div>
        </div>
    </div>

@endsection
@push('BottomExtraScripts')
    <script src="{{@url('js/formEditRecrutier.js')}}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{@url('js/map.js')}}" type="text/javascript"></script>
@endpush




