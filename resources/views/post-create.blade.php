@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post create:</div>

                <div class="card-body">

                  <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">TITLE:</label>
                      <input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                      @error ('title')
                        <span class="inavalid-feedeback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="body">BODY:</label>
                      <input type="text" name="body" value="{{ old('body') }}">
                    </div>
                    <div class="form-group">
                      <label for="like">LIKE:</label>
                      <input type="number" name="like" value="{{ old('like', 0) }}">
                    </div>
                    <div class="form-group">
                      <label for="dislike">DISLIKE:</label>
                      <input type="number" name="dislike" value="{{ old('dislike', 0) }}">
                    </div>
                    <div class="form-group">
                      <label for="tag">TAG:</label>
                      <input type="text" name="tag" value="{{ old('tag') }}">
                    </div>

                    <button type="submit" class="btn btn-primary" name="button">SAVE</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
