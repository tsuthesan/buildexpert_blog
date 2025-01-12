@extends('layouts.master')
@section('title')
    ||Build Expert - create
@stop
@section('content')
    <div class="page-header text">
        <h3> Create Tag</h3>

    </div>
    <div class="container-fluid ">
        <div class="col-lg-8">
            <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class=""></div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>

                <button type="submit" class="btn btn-success">Create</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </form>

        </div>

    </div>

@stop
