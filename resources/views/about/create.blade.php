@extends('master')
@section('main')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="{{ route('about.store') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" name="text" class="form-control" placeholder="Text" value="{{old('text')}}"/>
                            @if($errors->has('text'))
                                <span class="text-danger">{{ $errors->first('text')}}</span>
                            @endif
                        </div>
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
