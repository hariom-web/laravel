@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="lastname" class="form-control" placeholder="last Name">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:130px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>House Number:</strong>
                <input type="text" name="housenumber" class="form-control" placeholder="House Number">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Postal Code:</strong>
                <input type="text" name="postalcode" class="form-control" placeholder="Postal Code">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>City:</strong>
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Date Of Birth:</strong>
                <input type="date" name="dateofbirth" class="form-control">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
                <strong>Gender:</strong>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                    <label class="custom-control-label" for="female">Female</label>
                </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
                <strong>Marital Status:</strong>
                <select name="maritalstatus" id="maritalstatus">
                      <option value="select">Select</option>
                      <option value="single">Single</option>
                      <option value="marrid">Marrid</option>
                      <option value="unmarrid">Unmarried</option>
                      <option value="divorce">Divorce</option>
                </select>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection