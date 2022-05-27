@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <div class="card-body">
                        <h2 class="text-centter text-primary">Q & A App</h2>
                        <br>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->decription}}</p>
                        <hr>
                        <h4>Comments</h4>
                        @include('posts.comments', ['comments'=>$post->comments,'post_id'=>$post->id])
                        <form action="{{route('comments.store')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="decription"></textarea>
                            <input type="hidden" class="form-control" name="post_id" value="{{$post->id}}">

                        </div>
                        </form>
                            <button type="submit" class="btn btn-primary">Add Comments</button>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
