@extends('partials.header')
@section('title')
	Laravel Shopping Cart
@endsection
<body>

<div class="container">		
	<div class="panel panel-info">
	  <div class="panel-heading"><strong>{{ Auth::user()->name }}'s Cart</strong>
      <div class="clearfix"><a href="/checkout"><button class="btn btn-success" style="margin-left: 1000px">Checkout</button></a></div>
    </div>
	  <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cart_items as $addedProduct)
              <tr>
                <td><img src="{{$addedProduct->imagePath}}">
                  <h4 class="title">{{$addedProduct->product_name}}</h4>
                </td>
                <td>{{$addedProduct->quantity}}</td>
                <td>$ {{$addedProduct->amount}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div></div>
	</div>
</div>