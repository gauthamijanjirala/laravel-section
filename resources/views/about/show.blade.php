@extends('master')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">      
                <p>Text : <b>{{ $about->text }}</b></p>
                <p>Description : <b>{{ $about->description}}</b></p>
            </div>
        </div>
    </div>
</div>

@endsection
