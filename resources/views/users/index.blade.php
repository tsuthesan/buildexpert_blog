@extends('layouts.master')
@section('title')
    ||Build Expert - Tags
@stop
@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <br/>
            <a href="{{ route('users.create') }}" class="btn btn-success btn-lg">Create User</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert"> {{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">roles</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $key => $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="btn btn-danger btn-sm">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info " href="{{ route('users.show',$user->id) }}"><i class="icon icon-List">
                                Show</i></a>
                        <a class="btn btn-warning " href="{{ route('users.edit',$user->id) }}"><i
                                class="icon icon-Edit"> Edit</i></a>
                        <a class="btn btn-danger " href="{{ route('users.delete',$user->id) }}"><i
                                class="icon icon-Delete"> Delete</i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop
