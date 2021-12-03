@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Application</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>House Number</th>
            <th>Postal Code</th>
            <th>City</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->firstname }}</td>
            <td>{{ $product->lastname }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->email }}</td>
            <td>{{ $product->phonenumber }}</td>
            <td>{{ $product->address }}</td>
            <td>{{ $product->housenumber }}</td>
            <td>{{ $product->postalcode }}</td>
            <td>{{ $product->city }}</td>
            <td>{{ $product->dateofbirth }}</td>
            <td>{{ $product->gender }}</td>
            <td>{{ $product->maritalstatus }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <br></br>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <br></br>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection