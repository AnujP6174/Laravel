@extends('layouts.master2')

@section('title')
    Feed
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="mt-5">
                <label for="country" class="mb-2 d-block">Select Country</label>
                    <form action="" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <select class="form-select d-inline" style="width: 200px" name="country" id="country">
                                    <option value="all" selected>All Post</option>
                                    @foreach ($post as $pst)
                                            <option value="{{$pst->country->id}}">{{$pst->country->country_name}}
                                            </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Show</button>
                            </div>
                        </div>
                    </form>
            </div>
            @foreach ($posts as $pm)
                @if ($pm->media_type == 2)
                    <div class="col-3 mt-5">
                        <div>
                            <p><span style="color: green">Caption: </span>{{ $pm->post_caption }}</p>
                        </div>
                        <a href=""  class="show-post">
                            <img src="{{$pm->media_path}}"
                            alt="post-images" class="imgpost1" width="200" height="200">
                        </a>
                        <div><small>Posted By{{' '.$pm->user->name}} {!!'<br>On '.$pm->created_at->format('d-m-Y h:i:s A')!!}</small></div>
                    </div>
                @elseif ($pm->media_type == 1)
                    <div class="col-3 mt-5">
                        <div>
                            <p><span style="color: green">Caption: </span>{{ $pm->post_caption }}</p></div>
                        <a href=""  class="show-post">
                            <video autoplay loop muted width="200" height="200" style="line-height:0;object-fit:cover;">
                                <source src="{{$pm->media_path}}">
                            </video>
                        </a>
                        <div><small>Posted By{{' '.$pm->user->name}} {!!'<br>On '.$pm->created_at->format('d-m-Y h:i:s A')!!}</small></div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection