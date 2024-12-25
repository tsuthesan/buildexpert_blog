@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <form action="{{ 'permissions.destroy',$permission->id }}" method="DELETE">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header card bg-gradient-danger mb-8 mt-7">
                                    <h5 class="card-title">Are you sure you want to delete all the details of {{ $permission->name }} ? </h5>
                                </div>
                                <div class="card-body  bg-gradient-warning mb-3 mt-auto">
                                    It will erase all the Product information of {{ $permission->name }} from Database
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">


                                <a href="{{ route('permissions.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                                <button  type="submit" class="btn btn-secondary btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

        </div>
    </div>
@stop
