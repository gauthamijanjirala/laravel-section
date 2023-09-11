@extends('master')

@section('main')

<div class="container">
    <div class="
    justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card">
                <p>Email : <b>{{ $contact->email }}</b></p>
                <p>Address : <b>{{ $contact->address }}</b></p>
                <p>Mobile : <b>{{ $contact->mobile }}</b></p>
            </div>
        </div>
    </div>
</div>

@endsection