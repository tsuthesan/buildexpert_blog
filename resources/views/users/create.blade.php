@extends('layouts.master')
@section('title')
    ||Build Expert - create
@stop
@section('content')
    <div class="page-header text">
        <h3> Create User</h3>

    </div>
    <div class="container-fluid ">
        <div class="col-lg-8">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class=""></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                </div>

                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>

                <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password"
                           name="confirm-password">
                </div>

                <div class="form-group">
                    <strong>Role:</strong>
                    <select name="roles[]" class="form-control" multiple="multiple">
                        @foreach ($roles as $value => $label)
                            <option value="{{ $value }}">
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-success">Create</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </form>

        </div>

    </div>

@stop
