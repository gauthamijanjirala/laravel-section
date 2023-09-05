@extends('master')
@section('main')
    <div class="container">
        @include('layouts.messages')
        <div class="text-right">
            <a href="{{ route('news.create') }}" class="btn btn-primary mt-3"> Add News</a>
        </div>    
        <table class="table table-hover mt-4 ml-5  ">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($section as $key => $value)
            <tr>
            <?php //echo $loop->index+1  ?>
                <td>{{ $loop->index+1 }}</td>
                <td> 
                    <p>{{ $value->title }}</p>
                </td>
                <td>
                    <p>{{ $value->description }}</p>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('news.edit',$value->id) }} ">Edit</a>
                    <form action="{{ route('news.delete',$value->id) }}" method="Post">
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