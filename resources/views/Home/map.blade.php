@extends('layouts.home')
@push('jsScripts')
    @include('Includes.mapjs')
@endpush

@section('content')
    {!! $map['html'] !!}
@endsection

@push('bottomScripts')
    <script src="{{@url('js/map.js')}}" type="text/javascript"></script>
@endpush