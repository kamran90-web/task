@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 20px;">
    <br/>
    <div class = "card" style = "width:100%">
    <div class = "card-header">Restaurant Details</div>
    <div class = "card-body">
    <table class="table table-bordered" id="dynamicTable">
    <tr>
   
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Category</th>
    <th>Location</th>
    <th>Status</th>
    <th>Registered Users</th>
    </tr>
    <tbody>
        <tr>
            <td>{{$infos->name}}</td>
            <td>{{$infos->email}}</td>
            <td>{{$infos->phone}}</td>
            <td>{{$infos->category}}</td>
            <td>{{$infos->address}}</td>
            <td>{{$infos->status}}</td>
            <td>{{$infos->users}}</td>
        </tr>
        
    </tbody>
    </table>
    </div>
    </div>
    <br>
    <div class="container">
         <div class = "card" style = "width:100%">
            <div class = "card-header">Products</div>
            <div class = "card-body">
            <table class="table table-bordered" id="dynamicTable">  
                <tr>
                    <th>S.No.</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>  
                <tbody>
                    @foreach($products as $key=>$product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 
            <form action = "/home">
        <button type="submit" class="btn btn-danger">Back</button>
            </form>
    </div>
     
<style type="text/css">
    .card-header {
        border-radius: .625rem !important;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 
                    0 0.9375rem 1.40625rem rgba(90,97,105,.1), 
                    0 0.25rem 0.53125rem rgba(90,97,105,.12), 
                    0 0.125rem 0.1875rem rgba(90,97,105,.1);
    }
</style>
@endsection