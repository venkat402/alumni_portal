@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.admin-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/Alumni">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>

                @include('inc.messages')
                <div class="container">
                    <div class="row">
                        <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th><input type="checkbox" onclick="checkAll(this)"></th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnis as $alumni)
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>{{$alumni->First_Name}}</td>
                                    <td>{{$alumni->Middle_Name}}</td>
                                    <td>{{$alumni->Surname}}</td>
                                    <td>{{$alumni->email}}</td>
                                    <td><a class="btn btn-success" href="/Alumni/{{$alumni->id}}/edit">View</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Registration number</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection