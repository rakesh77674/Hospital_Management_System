@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
        <form>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Doctor Name</label>
                <input type="name" name = "name" class="form-control" id="inputEmail4" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Speciality</label>
                <select id="inputState" class="form-control" name = "inputState">
                    <option selected>Choose...</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value = "Anesthesiology">Anesthesiology</option>
                    <option value = "Ophthalmology">Ophthalmology</option>
                    <option value = "Pediatrics">Pediatrics</option>    
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">phone</label>
                <input type="number" name = "phone"class="form-control" id="inputEmail4" placeholder="Phone" required>       
            </div>
            </div>
            <div class="form-group">
            <label for="inputAddress">Room No</label>
            <input type="number" name = "room" class="form-control" id="inputAddress" placeholder="Room No">
            </div>
            <div class="form-group">
            <label for="inputAddress2">Doctor Image</label>
            <input type="file" name = "image" class="form-control" id="inputAddress2" placeholder="choose image">
            </div>
            </div>
            <div class="form-group"> 
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name = "state" class="form-control">
                <option selected>Choose...</option>
                 <option>...</option>
                </select>
                </div>
            <div class="form-group col-md-4">
                <label for="inputState">city</label>
                <select id="inputState" name = "city" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip code</label>
                <input type="text" name = "zipcode" class="form-control" id="inputZip">
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
