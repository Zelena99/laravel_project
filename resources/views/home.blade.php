@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header" style="font-weight: bold">{{ __('Welcome to our page!') }}</div>

                <div class="card-body d-flex justify-content-center">
                    <img src= "{{ asset ('/images/block-gdc253e421_640.png')}}" style="height:30em">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
