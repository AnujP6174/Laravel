@extends('layouts.master2')
@section('title')
   Admin Dashboard
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mt-4">
                <h3 style="color: green">Users List</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 mt-2 table-responsive justify-content-center">
                <table class="table border border-2 border-dark" id="usertable">
                    <thead>
                    <tr class="text-center">
                        <th>id</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($users as $user)
                            <tr class="border">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <input data-user="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{ $user->active_status ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        {{-- {{ $users->links() }} --}}
    </div>
@endsection
@section('js')
<script type="text/javascript">
    $("#usertable").DataTable();
    var status=0;
    var userId=0;
    // $(document).ready(function(){
        $('.toggle-class').change(function(){
            status=$(this).prop('checked')===true ? 1 : 0;
            userId= $(this).data('user');
            $.ajax({
                type:"GET",
                dataType:"json",
                url:"{{route('user.Status')}}",
                data:{
                    status:status,
                    userId:userId,
                },
                success: function(data){
                    console.log(data);
                    alert('User status Set');
                },
                error:function(error){
                    console.log(error);
                    alert('User Status Not Set');
                }
            });
        });
    // });
    
</script>
@endsection
