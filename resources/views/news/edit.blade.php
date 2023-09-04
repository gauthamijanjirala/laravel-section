@extends('master')

@section('main')
<div class="container">
        <div class="row justify-content-center  pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">
                        News Edit {{ $section->$id}}
                    </h3>
                    <form method="POST" action="{{ route('news.edit') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value=""/>
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description"></textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection