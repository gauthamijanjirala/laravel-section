@extends('master')
@section('main')
<div class="container">
@include('layouts.messages')
        <div class="text-right">
            <a href="{{ route('contact.create') }}" class="btn btn-primary mt-3"> Add Contact</a>
        </div>    
    <table class="table table-hover">
        <thead>
              <tr>
                <th>Sr.no</th>
                <th>Email</th>
                <th>Address</th>
                <th>Mobile </th>
                <th>Action </th>
              </tr>
        </thead>
        <tbody>
            @foreach($section as $key => $value)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>
                    <p>{{ $value->email }}  </p>
                </td>
                <td>
                    <p>{{ $value->address }} </p>
                </td>
                <td>
                 <p> {{ $value->mobile }} </p>
                </td>
                <td>
                <a class="btn btn-primary" href="{{ route('contact.edit',$value->id) }} ">Edit</a>
                    <form action="{{ route('contact.delete',$value->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
