@extends('layouts.recruiter')
@section('content')
    <div class="col-lg-9 column">
        <div class="padding-left">
            <div class="profile-title" id="mp">
                                <h3>My Profile</h3>
                                <div class="upload-img-bar">
                                    <span><img src="/storage/{{ $user->companyLogo }}" alt="" /><i>x</i></span>
                                    <div class="upload-info">
                                        <span></span>
                                    </div>
                                </div>
            </div>
            {{--Profile details method="POST" action=""--}}
            <div class="profile-form-edit">
                                <form method="POST" action="recruiterUpdate"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input id="recId" type="hidden" class="form-control " name="recId" value="{{ $user->recruiter_id }}">
                                        {{--Compnane name--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">Company Name</span>
                                            <div class="pf-field">
                                                <input disabled="true" type="text" placeholder="{{$user->companyName}}" />
                                            </div>
                                        </div>
                                        {{--email address--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">Email Address</span>
                                            <div class="pf-field">
                                                <input  type="email" disabled="true" placeholder="{{$user->email}}" />
                                            </div>
                                        </div>
                                        {{--Recruiter name--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">Recruiter name</span>
                                            <div class="pf-field">
                                                <input  type="text" id="name" name="name"  value="{{$user->name}}" class="@error('name') is-invalid @enderror" required autocomplete="name"/>
                                            </div>
                                        </div>
                                        {{--company website--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">Company website</span>
                                            <div class="pf-field">
                                                <input  type="url" disabled="true" placeholder="{{$user->website}}" />
                                            </div>
                                        </div>
                                        {{--Country name--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">Country</span>
                                            <div class="pf-field">
                                                <input type="text" value="{{$countryName->name}}" />
                                            </div>
                                        </div>
                                        {{--City name--}}
                                        <div class="col-lg-6">
                                            <span class="pf-title">City</span>
                                            <div class="pf-field">
                                                <input type="text" value="{{$cityName->name}}" />
                                            </div>
                                        </div>

                                        {{--Choose country to update current--}}
                                        <div class="col-lg-6" id="countryDl" style="display: none;">
                                            <span class="pf-title">Country</span>
                                            <div class="pf-field">
                                                <select name="countryId" id="country_id" class="chosen" data-dependant="City">
                                                    <option value=""></option>
                                                    @foreach($getCountryName as $countryName)
                                                        <option value="{{$countryName->id}}">{{$countryName->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        {{--    --}}
                                        {{--Choose city to update current--}}
                                        <div class="col-lg-6" id="cityDl" style="display: none;">
                                            <span class="pf-title">City</span>
                                            <div class="pf-field">
                                                <select name="cityID" id="cityID" data-placeholder="Select a City" class="cityNames @error('cityID') is-invalid @enderror" required autocomplete="cityID">
                                                    <option value="0" disabled="true" selected="true" ></option>
                                                </select>
                                            </div>
                                        </div>
                                        {{--Upload photo--}}
                                        <div class="col-lg-6" id="uploadImage" style="display: none;">
                                            <span class="pf-title">Upload a new logo</span>
                                            <div class="upload-info">
                                                <input name="companyLogo" id="companyLogo"  type="file" class="form-control-file @error('companyLogo') is-invalid @enderror" title="" />
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" id="updateBtn" style="display: none" >Update</button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" id="editBtn">Edit your profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
            <div class="contact-edit" id="ci"></div>
            {{--End of Contact  Section --}}
        </div>
    </div>
@endsection
@push('BottomExtraScripts')
    <script src="{{@url('js/formEditRecrutier.js')}}" type="text/javascript"></script>
@endpush



