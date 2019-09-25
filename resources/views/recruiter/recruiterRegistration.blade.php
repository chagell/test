@extends('layouts.home')
@section('content')
    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signup-popup-box static">
                            <div class="account-popup">
                                <h3>Registration</h3>
                                <span>Start your registration by filling the below information</span>
                                {{--Begin of the form--}}
                                <form method="POST"  action="/recruiter/registerRecruiter" enctype="multipart/form-data">
                                    @csrf
                                    {{--User type--}}
                                    <div class="dropdown-field">
                                        <select id="userType_id" name="userType_id"  data-placeholder="Please Select your Role" class="chosen">
                                            <option value="3">Recruiter</option>
                                            <option value="4" disabled="true">Job seeker</option>
                                        </select>
                                    </div>
                                    {{--name--}}
                                    <div class="cfield">
                                        <input type="text" id="" name="name" placeholder="Full name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" />
                                        <i class="la la-user"></i>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    {{--Email--}}
                                    <div class="cfield">
                                        <input type="email" id="email" name="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" />
                                        <i class="la la-envelope-o"></i>
                                    </div>
                                    {{--companyName--}}
                                    <div class="cfield">
                                        <input type="text" id="companyName" name="companyName" placeholder="Company name" class="form-control @error('companyName') is-invalid @enderror"  value="{{ old('companyName') }}" required autocomplete="companyName"  />
                                        <i class="fa fa-building-o"></i>
                                        @error('companyName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{--Website--}}
                                    <div class="cfield">
                                        <input type="url" id="website" name="website" placeholder="Company website" value="http://" class="form-control @error('website') is-invalid @enderror"  value="{{ old('website') }}" required autocomplete="website"  />
                                        <i class=""></i>
                                    </div>
                                    {{--Country--}}
                                    <div class="dropdown-field">
                                        <select name="countryId" id="country_id" class="chosen" data-placeholder="Select a Country" data-dependant="City">
                                            <option value=""></option>
                                            @foreach($getCountryName as $countryName)
                                                <option value="{{$countryName->id}}">{{$countryName->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('Country')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    {{--City--}}
                                    <div class="dropdown-field">
                                        <select name="cityID" id="cityID" data-placeholder="Select a City" class="cityNames form-control input-group-lg">
                                            <option value="0" disabled="true" selected="true" ></option>
                                        </select>
                                        @error('City')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{--comanyLogo--}}
                                    <div class="cfield">
                                        <input type="file" id="companyLogo" name="companyLogo" placeholder="Upload your company logo" class="form-control @error('companyLogo') is-invalid @enderror"  value="{{ old('companyLogo') }}" required />
                                        <i class="fa fa-file-image-o"></i>
                                        @error('companyLogo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{--Password--}}
                                    <div class="cfield">
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}" required autocomplete="password" />
                                        <i class="la la-key"></i>
                                    </div>
                                    {{--password_confirmation--}}
                                    <div class="cfield">
                                      <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Password confirmation" class="form-control"  required autocomplete="new-password">
                                    <i class="la la-key"></i>
                                    </div>
                                    <button type="submit">Signup</button>
                                </form>
                                {{csrf_field()}}
                            </div>
                        </div><!-- SIGNUP POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <div class="form-group row">--}}
{{--    <label for="companyLogo" class="col-md-4 col-form-label text-md-right">{{ __('Company Logo') }}</label>--}}
{{--        <div class="col-md-6">--}}
{{--           <input id="companyLogo" type="file" class="form-control-file @error('companyLogo') is-invalid @enderror" name="companyLogo" value="{{ old('companyLogo') }}" required autocomplete="companyLogo">--}}
{{--              @error('companyLogo')--}}
{{--                 <span class="invalid-feedback" role="alert">--}}
{{--                     <strong>{{ $message }}</strong>--}}
{{--                 </span>--}}
{{--              @enderror--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@push('BottomExtraScripts')
    <script src="{{@url('js/formEditRecrutier.js')}}" type="text/javascript"></script>
@endpush




