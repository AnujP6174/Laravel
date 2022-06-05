@extends('includes.master')

@section('content')
    <div class="mt-5">
        <h5>Welcome to User's home</h5>
        <a href="{{route('logout')}}" class="btn btn-sm btn-danger">Logout</a>
    </div>
@endsection