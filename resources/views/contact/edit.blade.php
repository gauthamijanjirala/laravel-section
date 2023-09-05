@extends('master')
@section('main')
<div class="container">
    <div class="col-sm-8">
        <div class="card mt-3 p-3">
            <form method="POST" action="{{ route('contact.update',$section->id) }}" enctype="multipart/form-data">
                @csrf   
                @method('PUT')
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $section->email }}"/>
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="address">{{ $section->address }}</textarea>
                    @if($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address')}}</span>
                    @endif
                    <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ $section->mobile }}"/>
                    @if($errors->has('mobile'))
                        <span class="text-danger">{{ $errors->first('mobile')}}</span>
                    @endif
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection