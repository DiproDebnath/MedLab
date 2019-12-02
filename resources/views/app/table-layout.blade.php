
@extends('app.app')

@section('header_files')

@endsection
@section('body_content')
    @yield("content")
@endsection


@section('footer_files')
    <!-- Chart Js-->
    <script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- Morris Js-->
    <script src="{{asset('assets/plugins/morris-js/morris.min.js')}}"></script>
    <!-- Raphael Js-->
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/pages/dashboard-demo.js')}}"></script>
@endsection