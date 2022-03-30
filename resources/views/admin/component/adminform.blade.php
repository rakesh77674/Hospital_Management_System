@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
        <form>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Doctor Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Phone</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Speciality</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
            </div>
            </div>
            <div class="form-group">
            <label for="inputAddress">Room No</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
            <label for="inputAddress2">Doctor Image</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            </div>
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Check me out
                </label>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
@stop

@section('content')
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script> 
@stop
