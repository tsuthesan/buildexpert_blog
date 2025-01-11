@extends('layouts.master')
@section('title')
    ||Build Expert - edit
@stop
@section('content')
    <div class="page-header text">
        <h3> Edit User</h3>

    </div>
    <div class="container-fluid ">
        <div class="col-lg-8">
            <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class=""></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                           value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email"
                           value="{{ $user->email }}">
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
                            <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : ''}}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-success">Update</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </form>

        </div>

    </div>

@stop
