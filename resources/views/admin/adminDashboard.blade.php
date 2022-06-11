@extends('layouts.master2')
@section('title')
   Admin Dashboard
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-12 mt-5 justify-content-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="" class="btn btn-sm btn-primary" id="userStatus">Active</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        {{ $users->links() }}
    </div>
@endsection
