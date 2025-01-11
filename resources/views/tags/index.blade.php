@extends('layouts.master')
@section('title')
    ||Build Expert - Tags
@stop
@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <br/>
            <a href="{{ route('tags.create') }}" class="btn btn-success btn-lg">Create Tag</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert" > {{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tag->name }}</td>
                <td>
                    <a class="btn btn-info " href="{{ route('tags.show',$tag->id) }}"><i class="icon icon-List"> Show</i></a>
                    <a class="btn btn-warning " href="{{ route('tags.edit',$tag->id) }}"><i class="icon icon-Edit"> Edit</i></a>
                    <a class="btn btn-danger " href="{{ route('tags.delete',$tag->id) }}"><i class="icon icon-Delete"> Delete</i></a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop
