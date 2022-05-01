<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>
    <h1>User Login</h1>
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $err)
        <li style="color: red">{{$err}}</li>
    @endforeach
    @endif --}}
    <form action="users" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter User ID"><br>
        <span style="color: red">
        @error('username')
            {{$message}}
        @enderror
    </span>
        <br><br>
        <input type="password" name="password" placeholder="Enter User Password"><br>
        <span style="color: red">
            @error('password')
                {{$message}}
            @enderror
        </span>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>