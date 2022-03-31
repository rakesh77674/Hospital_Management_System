@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
        <form method="post" action="{{url('/Create')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Doctor Name</label>
                <input type="name" name = "name" class="form-control" id="inputEmail4" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Speciality</label>
                <select id="inputState" class="form-control" name = "speciality">
                    <option selected>Choose...</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value = "Anesthesiology">Anesthesiology</option>
                    <option value = "Ophthalmology">Ophthalmology</option>
                    <option value = "Pediatrics">Pediatrics</option>    
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">phone</label>
                <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="Phone" required>       
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
                <select id="state" name = "states_id" class="form-control">
                <option value="">Select State</option>
                @foreach ($data as $data1 )
                 <option value="{{$data1->id}}">{{$data1->state}}</option>
                 @endforeach
                </select>  
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">city</label>
                <select id="city" name = "cities_id" class="form-control">
                    <option value="">Select City</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip code</label>
                <input type="number" name = "zipcode" class="form-control" id="inputZip">
            </div>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
               <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
                <script>
                    jQuery(document).ready(function(){
                    jQuery('#state').change(function(){
                            let cid=jQuery(this).val();
                            jQuery('#city').html('<option value="">Select City</option>')
                            jQuery.ajax({
                                url:'/getcity',//url given in request
                                type:'post',
                                data:'cid='+cid+'&_token={{csrf_token()}}',
                                success:function(result){
                                jQuery('#city').html(result);
                                }
                            });
                            });
                        });    
                </script>
@stop
@section('content')
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')    

@stop
