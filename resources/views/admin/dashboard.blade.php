@extends('includes.master')

@section('content')
    <div class='mt-5'>
        <h5>Welcome to Admin Dashboard</h5>
        <a href="{{route('admin.logout')}}" class="btn btn-sm btn-danger">Logout</a>
    </div>
@endsection