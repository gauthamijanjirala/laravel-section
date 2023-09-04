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
                    <p>{{ $value->title }}</p>
                </td>
                <td>
                    <p>{{ $value->description }}</p>
                </td>
                <td>
                <form action="{{ route('news.delete') }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('news.edit') }} ">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <!-- <a href="{{ route('news.edit')}}" class="btn btn-primary btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <form method="POST" class="d-inline" action="news/{{ $value->id }}/delete ">
                        <button type="submit" class="btn btn-danger btn-sm ">Delete </button>
                    </form> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection