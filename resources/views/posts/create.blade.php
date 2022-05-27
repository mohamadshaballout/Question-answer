@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><div class="header">create</div>
            <div class="body">
                <form method="POST" action="{{ROUTE('posts.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">decription</label>
                        <textarea type="text" class="form-control" name="description" required></textarea>

                      </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </div>
    </div>
</div>




@endsection
