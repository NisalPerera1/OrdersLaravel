@extends('Items.layout')

@section('content')
<br>
<h2>Enter Your Item Details</h2><br>
<!--this form is for create items  -->

<!--onsubmit sending inputs to the itemcontroller's store function with POST method  -->
<form action="{{route('orders.store')}}" method="POST">
@csrf

<div class="row">

<div class="col-lg-12">
<div class= " form-group"> 
<label>Ordr Name</label>
<input type="text" class="form-control" id="itemname" name="name" placeholder="Enter Item Name">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Email</label>
<input type="text" class="form-control" id="itemdescription" name="description" placeholder="Enter Item Description">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Shipping Address</label>
<input type="text" class="form-control" id="itemdescription" name="description" placeholder="Enter Item Description">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<button type="submit" class="btn btn-primary" >Submit</button>

<!--href is assigned to index-->
<a class="btn btn-danger" href="{{route('items.index')}}">Back</a>

</div>
</div>

</div>
</form>

@endsection