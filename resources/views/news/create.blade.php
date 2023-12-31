@extends('master')

@section('main')
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="{{ route('news.store') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}"/>
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title')}}</span>
                            @endif
                        </div>
                        <div clas="form-group">
                            <label> Image </label>
                            <input type="file" name="image" clas="form-control"/><br>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image')}}</span>
                            @endif
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description" placeholder="Description">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection