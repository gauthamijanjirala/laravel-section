@extends('master')
@section('main')
<div class="container">
    <div class="col-sm-8">
        <div class="card mt-3 p-3">
            <form method="POST" action="{{ route('about.update',$section->id) }}" enctype="multipart/form-data">
                @csrf   
                @method('PUT')
                    <label>Text</label>
                        <input type="text" name="text" class="form-control"  value="{{old('name', $section->name)}}"/>
                    @if($errors->has('text'))
                        <span class="text-danger">{{ $errors->first('text')}}</span>
                    @endif
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description" placeholder="Description">{{old('description',$section->description)}}</textarea>
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description')}}</span>
                        @endif
                    </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection