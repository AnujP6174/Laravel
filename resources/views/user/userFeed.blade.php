@extends('layouts.master2')
@section('title')
    Feed
@endsection
@section('content')
<div class="container px-5 mt-5">
    <div class="row mt-5 justify-content-start">
            @foreach ($allpost as $posts)
                @if ($posts->media_type===2)
                    <div class="col-12 col-md-3 mt-5">
                        <span style="color: green">Caption: </span>{{ $posts->post_caption }}
                        <a>
                            <img src="{{$posts->media_path}}" alt="post-images" width="200" height="200" style="border: 4px solid lightblue">
                        </a>
                        <p><span style="color: green">Posted By: </span>{{$posts->user->name}} {!!'<br>On '.$posts->created_at->format('d-m-Y h:i:s A')!!}</p>
                    </div>
                @elseif($posts->media_type===1)
                    <div class="col-3 col-md-3 mt-5">
                        <span style="color: green">Caption: </span>{{ $posts->post_caption }}
                        <a>
                            <video autoplay loop muted width="200" height="200" style="border: 4px solid lightblue">
                                <source src="{{$posts->media_path}}">
                            </video>
                        </a>
                        <p><span style="color: green">Posted By: </span>{{$posts->user->name}} {!!'<br>On '.$posts->created_at->format('d-m-Y h:i:s A')!!}</p>
                    </div>
                @endif
            @endforeach
        </div>
</div>
@endsection