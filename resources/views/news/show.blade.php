@extends('master')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">      
                <p>Title : <b>{{ $news->title }}</b></p>
                <p>Description : <b>{{ $news->description }}</b></p>
                <img src="/news/{{ $news->image }}" class="rounded" width="50%"/>
            </div>
        </div>
    </div>
</div>

@endsection