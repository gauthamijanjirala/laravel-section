@extends('master')

@section('main')
<div class="container">
        <div class="row justify-content-center  pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">
                        Product Edit {{ $product->id}}
                    </h3>
                    <form method="POST" action="/products/{{ $product->id }}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}"/>
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description">{{old('description',$product->description)}}</textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                        <div clas="form-group">
                            <label> Image </label>
                            <input type="file" name="image" clas="form-control"/><br>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image')}}</span>
                            @endif

                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection