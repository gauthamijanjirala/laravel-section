@extends('master')
@section('main')
    <div class="container">
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
            <?php // echo $loop->index+1  ?>
                <td>{{ $loop->index+1 }}</td>
                <td>
                    <a class="text-dark">{{ $value->title }}</a>
                </td>
                <td>
                    <a class="text-dark">{{ $value->description }}</a>
                </td>
                <td>
                    <a href="products/{{ $value->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <form method="POST" class="d-inline" action="products/{{ $value->id }}/delete ">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm ">Delete </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection