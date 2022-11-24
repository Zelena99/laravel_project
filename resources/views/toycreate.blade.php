@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="{{ route ('toystore')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Article name</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="age">
      </div>

      <div class="mb-3">
        <label for="img" class="form-label">Image</label>
        <input type="file" name="img" class="form-control" id="img">
      </div>

      <button type="submit" class="btn btn-danger">Save</button>
    </form>
</div>

@endsection