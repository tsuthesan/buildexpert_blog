@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <br/>
            <a href="{{ route('blogs.create') }}" class="btn btn-success btn-lg">Create blog</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert"> {{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">content</th>
                <th scope="col">Published/Draft</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->Content }}</td>
                    <td>{{ $blog->Content }}</td>
                    <td>
                        <a class="btn btn-info " href="{{ route('tags.show',$blog->id) }}"><i class="icon icon-List">
                                Show</i></a>
                        <a class="btn btn-warning " href="{{ route('tags.edit',$blog->id) }}"><i class="icon icon-Edit">
                                Edit</i></a>
                        <a class="btn btn-danger " href="{{ route('tags.delete',$blog->id) }}"><i
                                class="icon icon-Delete"> Delete</i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop
