@extends('layouts.app')

@section('content')
<div class="container">

<div class="row d-flex justify-content-center">
    <div class="card mt-3 text-center" style="width: 18rem;">
        <img src="{{ $toy->img}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $toy->title}}</h5>
          <p class="card-text">{{ $toy->description}}</p>
          @isset($toy->age)
          <p class="card-text">Minimun age: {{ $toy->age}}</p>
          @endisset

        @auth
          
        <div class="d-flex justify-content-around">
          <a href="{{ route ('toyedit', $toy)}}" class="btn btn-danger">Edit</a>
          <form method="post" action="{{ route ('toydestroy', $toy)}}">
            @csrf
            <button type="submit" class="btn btn-danger">Delet</button>
          </form>
        </div>
        @endauth
        
        </div>
      </div>
</div>

</div>
@endsection
