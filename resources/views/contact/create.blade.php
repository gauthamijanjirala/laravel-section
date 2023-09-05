@extends('master')
@section('main')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="{{ route('contact.store') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}"/>
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="4" name="address" placeholder="Address">{{old('address')}}</textarea>
                            @if($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mobile no.</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="{{old('mobile')}}"/>
                            @if($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile')}}</span>
                            @endif
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
