@extends('layouts.app')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
<body>
  @if (Session::has('flash_message'))
    <div class="alert alert-success fade in alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
      {{Session::get('flash_message')}}
      <a href="/cart" class="alert-link">cart!</a></div>
  @endif
    @foreach($products->chunk(3) as $productGroup)
        <div class="row">
            @foreach($productGroup as $product)
                <div class="col-sm-5 col-md-4">
                  <div class="thumbnail">
                      <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                      <div class="caption">
                          <h3>{{$product->name}}</h3>
                          <h6>{{$product->category}}</h6>
                          <p class="description">{{$product->description}}</p>
                          <div class="clearfix">
                            <div class="badge price">${{$product->price}}</div>
                            <a href="/cart/{{$product->id}}" class="btn btn-success pull-right"  role="button">Add to Cart</a>
                          </div>
                      </div>
                  </div>
                </div>
            @endforeach
        </div>
    @endforeach
</body>
@endsection