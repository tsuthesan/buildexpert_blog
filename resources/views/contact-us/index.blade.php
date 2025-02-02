@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="pull-right">
            <br/>

        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert"> {{ session('success') }}</div>
        @endif
    </div>
    <div class="container-fluid">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">company</th>
                <th scope="col">message</th>
                <th scope="col">file</th>

                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><span class="" style="font-size: 20px;">{{ $contact->name }}</span></td>
                    <td><span class="" style="font-size: 20px;">{{ $contact->email }}</span></td>
                    <td><span class="" style="font-size: 20px;">{{ $contact->phone }}</span></td>
                    <td><span class="" style="font-size: 20px;">{{ $contact->company  }}</span></td>
                    <td><span class="" style="font-size: 20px;">{{ $contact->message  }}</span></td>
                    <td>
                        @if($contact->file)
                            <a href="{{ asset('storage/'.$contact->file) }}" target="_blank"> {{ basename($contact->file)  }}</a>
                        @else
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info " href="{{ route('roles.show',$contact->id) }}"><i class="icon icon-List">
                                Show</i></a>
                        <a class="btn btn-warning " href="{{ route('roles.edit',$contact->id) }}"><i
                                class="icon icon-Edit"> Edit</i></a>
                        <a class="btn btn-danger " href="{{ route('roles.delete',$contact->id) }}"><i
                                class="icon icon-Delete"> Delete</i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop
