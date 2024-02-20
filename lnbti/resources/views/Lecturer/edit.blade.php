@extends('Lecturer.layout')
@section('content')
    <div class="card">
    <div class="card-header">lecturers Page</div>
    <div class="card-body">
        
        <form action="{{ url('lecturer/' .$lecturers->id) }}" method="post">
            {!! csrf_field() !!}
            <!-- When the form is rendered, the csrf_field() helper generates 
            a hidden field with the name _token and a randomly generated value. -->
            @method("PATCH")
            <!-- partially updating resources -->
            <input type="hidden" name="id" id="id" value="{{$lecturers->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$lecturers->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$lecturers->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$lecturers->mobile}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    
    </div>
    </div>
@endsection