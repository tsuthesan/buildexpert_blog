@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <br/>
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-lg">Create Role</a>
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
            @foreach($roles as $role)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> <span class="label label-primary" style="font-size: 20px;">{{ $role->name }}</span></td>
                    <td>
                        <a class="btn btn-info " href="{{ route('roles.show',$role->id) }}"><i class="icon icon-List"> Show</i></a>
                        <a class="btn btn-warning " href="{{ route('roles.edit',$role->id) }}"><i class="icon icon-Edit"> Edit</i></a>
                        <a class="btn btn-danger " href="{{ route('roles.delete',$role->id) }}"><i class="icon icon-Delete"> Delete</i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop
