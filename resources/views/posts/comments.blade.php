


@foreach($comments as $item)
<div>
    <strong>{{$item->user->name}}</strong>
    <p>{{$item->description}}</p>
    <form method="POST" action="{{route('comments.store')}}">
       @csrf
        <div class="form-group">

          <input type="text" class="form-control" name="description">
          <input type="hidden" class="form-control" name="post_id" value="{{$post_id}}">
          <input type="hidden" class="form-control" name="comment_id" value="{{$item->id}}">
        </div>

        <button type="submit" class="btn btn-primary">Reply</button>
        @include('posts.comments',['comments'=>$item->replies])
      </form>
</div>
@endforeach

