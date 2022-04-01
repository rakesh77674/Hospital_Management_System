@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
                 <form method = "get" action = "{{url('Add')}}">
                    <a href="/admin/form">
                    <span class="btn btn-success col fileinput-button" style = "width: 138px;">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                    </a>
                    </form>
            <table class="table table-bordered">
                <thead>
                <tr style ="background: #f7e3b7">
                    <th scope="col">Doctors Name</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Room No</th>
                    <th scope="col">image</th>
                    <th scope="col">zipcode</th>
                    <th scope="col">State</th>
                    <th scope="col">Cities</th>
                    <th scope = "col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($doctor as $doctor)
                <tr>  
                    
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->room}}</td>
                    <td ><img height = "50" width = "50" margin = "12"src = "/doctorimage/{{$doctor->image}}"></td>
                    <td>{{$doctor->zipcode}}</td>
                    <td>{{$doctor->states_id}}</td>
                    <td>{{$doctor->cities_id}}</td>
                    <td>
                    <button type="button" class="btn btn-warning" style ="background: red; color:white;">Delete</button>
                    <button type="button" class="btn btn-primary">Update</button>
                    </td>          
                </tr>
                @endforeach 
                </tbody>
            </table>
@stop

@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script> 
@stop