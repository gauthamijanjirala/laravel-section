
@extends('master')
@section('main')
<div class="container">
@include('layouts.messages')
        <div class="text-right">
            <a href="{{ route('about.create') }}" class="btn btn-primary mt-3"> Add </a>
        </div>    
    <table class="table table-hover">
        <thead>
              <tr>
                <th>Sr.no</th>
                <th>Text</th>
                <th>Description</th>
                <th>Action </th>
              </tr>
        </thead>
        <tbody>
            @foreach($section as $key => $value)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>
                    <p>{{ $value->text }}  </p>
                </td>
                <td>
                    <p>{{ $value->description }} </p>
                </td>
                <td>
                <a class="btn btn-primary" href="{{ route('about.edit',$value->id) }} ">Edit</a>
                <a class="btn btn-success" href="{{route('about.show',$value->id)}}">Show</a>

                    <form action="{{ route('about.delete',$value->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                        <button class="btn btn-danger" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                        {{ __('Delete') }}
                        </button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
