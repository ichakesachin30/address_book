
@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <!--<p>This is appended to the master sidebar.</p>-->
@endsection

@section('content')
    <p>Welcome to Laravel Framework</p>
@endsection