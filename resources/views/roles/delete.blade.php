@extends('layouts.master')
@section('content')

        <div class="row form-group">
            <div class="col-12">

                <div class="container-fluid" style="margin-left: 5px">
                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                        @method('DELETE')
                        @csrf


                        <div class="col-md-12 ">
                            <div class="bg-gradient-danger mb-8 mt-7">
                                <h5 class="card-title">Are you sure you want to delete all the details of {{ $role->name }} ? </h5>
                            </div>
                            <div class="card-body  bg-gradient-warning mb-3 mt-auto">
                                It will erase all the Product information of {{ $role->name }} from Database
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12">


                                <a href="{{ route('roles.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                                <button  type="submit" class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

        </div>

@stop
