@extends('Items.layout')

@section('content')
<br>
<div class= "form-group row">
<div class="col-lg-12 margin-tb">
    <div class="float-right" alignment="absolute">
    <a href="{{ route('orders.create') }}">Create Order</a>

    </div>
</div>
</div><br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!--this is for view details  -->
<table class="table table-bordered">
    <tr>
     <th>Order ID</th> 
     <th>Name</th>   
     <th>Email</th> 
     <th>Shipping Address</th>   
  

    </tr>
       <!--this is for view details.data object assigned in the controller -->
       <tbody>
        @foreach ($data as $item)
            <tr>
            <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->shipping_address}}</td>
                <td>
                <!--we cant set the delete function as before. it will be sending as post request.So I created a form -->
                <!--in here method = form method -->
                <form action="{{ route('orders.destroy', $item->id) }}" method="POST">

                <!--Couldnt get outside edit button from form created for delete.css flipping  -->
                <a class="btn btn-primary" href="{{ route('orders.edit', $item->id) }}">Edit</a>

                <!--we cant set the delete function as before. it will be sending as post request. -->
                <form action="{{ route('orders.destroy', $item->id) }}" method="POST">
                <!--in here method = form method -->

                @csrf
                 <!--Here is the Button method method -->
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger" type="" >Delete</button>
                        </form>


                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection