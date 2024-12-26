@extends('layouts.master')
@section('content')
    <div class="page-header text">
        <h3> Edit Permission</h3>

    </div>
    <div class="container-fluid ">
        <div class="col-lg-8">
            <form action="{{ route('permissions.update',$permission->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=""></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" value="{{ $permission->name }}" name="name">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </form>

        </div>

    </div>

    @stop
