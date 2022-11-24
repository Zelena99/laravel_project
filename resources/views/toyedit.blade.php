@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="{{ route ('toyupdate', $toy)}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Article name</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $toy->title }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control" {{ $toy->description }}></textarea>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="age" value="{{ $toy->age}}">
      </div>

      <div class="mb-3">
        <label for="img" class="form-label">Image</label>
        <input type="file" name="img" class="form-control" id="img">
      </div>

      <div class="mb-3">
        <label for="img" class="form-label">Actual image</label>
        <img src="{{ $toy->img}}" class="w-25">
      </div>
      <button type="submit" class="btn btn-danger">Save</button>
    </form>
</div>

@endsection