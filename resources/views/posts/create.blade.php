@extends('layouts.app')

@section('content')
<style>
body {
	background-color: #333;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold">Create Feedback Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
