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
                        <p>
                            <span style="color: green">Posted By: </span>{{$posts->user->name}} {!!'<br>On '.$posts->created_at->format('d-m-Y h:i:s A')!!}<br>
                            <a href="" class="me-2 btn btn-sm btn-primary" style="text-decoration: none">Like</a>
                            <a href="" data-post={{$posts->id}} data-user={{$user->id}} class="btn btn-sm btn-secondary commentbtn">Comment</a>
                        </p>
                    </div>
                @elseif($posts->media_type===1)
                    <div class="col-3 col-md-3 mt-5">
                        <span style="color: green">Caption: </span>{{ $posts->post_caption }}
                        <a>
                            <video autoplay loop muted width="200" height="200" style="border: 4px solid lightblue">
                                <source src="{{$posts->media_path}}">
                            </video>
                        </a>
                        <p>
                            <span style="color: green">Posted By: </span>{{$posts->user->name}} {!!'<br>On '.$posts->created_at->format('d-m-Y h:i:s A')!!}<br>
                            <a href="" class="me-2 btn btn-sm btn-primary" style="text-decoration: none">Like</a>
                            <a href="" class="btn btn-sm btn-secondary commentbtn" data-anuj={{$posts->id}}>Comment</a>
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
</div>
    {{-- comment modal starts--}}
    <div class="modal fade" tabindex="-1" id="cmntmodal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Comment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" id="cmntform">
                  @csrf
                  <div class="form-group">
                    <label for="body">Add Comment</label>
                    <textarea class="form-control" name="body" id="body" rows="5"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="modalsave">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    {{-- comment modal ends --}}
@endsection
@section('js')
    <script src="{{URL::to('src/js/User/commentModal.js')}}"></script>
    <script>
        var token='{{csrf_token()}}';
        var urlComment={{route('add.Comment')}};
    </script>
@endsection