@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
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
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="firstname" value="{{ $product->firstname }}" class="form-control" placeholder="First Name">
                </div>
            </div>
              <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="lastname" value="{{ $product->lastname }}" class="form-control" placeholder="Last Name">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="text" name="image" value="{{ $product->image }}" class="form-control" placeholder="image">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $product->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" name="phonenumber" value="{{ $product->phonenumber }}" class="form-control" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea class="form-control" style="height:130px" name="address" placeholder="Detail">{{ $product->address }}</textarea>
                </div>
            </div>
           <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>House Number:</strong>
                    <input type="text" name="housenumber" value="{{ $product->housenumber }}" class="form-control" placeholder="House Number">
                </div>
            </div>
             <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Postal Code:</strong>
                    <input type="text" name="postalcode" value="{{ $product->postalcode }}" class="form-control" placeholder="Postalcode">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{ $product->city }}" class="form-control" placeholder="City">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Date Of Birth:</strong>
                    <input type="date" name="dateofbirth" value="{{ $product->dateofbirth }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type=radio name="gender" value="Male" {{ $product->gender == 'Male' ? 'checked' : ''}}>Male</option>
                    <label for="male"></label>
                    <input type=radio name="gender" value="Female" {{ $product->gender == 'Female' ? 'checked' : ''}}>Female</option>
                    <label for="female"></label>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Marital Status:</strong>
                    <select name="maritalstatus" id="maritalstatus">
                      <option value="select" name="maritalstatus" value="Select" {{ $product->maritalstatus == 'select' ? 'selected' : ''}}>Select</option>
                      <label for="select"></label>

                      <option value="single" name="maritalstatus" value="Single" {{ $product->maritalstatus == 'single' ? 'selected' : ''}}>Single</option>
                      <lable for="single"></lable>

                      <option value="marrid" name="maritalstatus" value="Marrid" {{ $product->maritalstatus == 'marrid' ? 'selected' : ''}}>Marrid</option>
                      <lable for="marrid"></lable>

                      <option value="unmarrid" name="maritalstatus" value="Unmarrid" {{ $product->maritalstatus == 'unmarrid' ? 'selected' : ''}}>Unmarrid</option>
                      <lable for="unmarrid"></lable>
                      
                      <option value="divorce" name="maritalstatus" value="Divorce" {{ $product->maritalstatus == 'divorce' ? 'selected' : ''}}>Divorce</option>
                      <lable for="divorce"></lable>
                    </select>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection