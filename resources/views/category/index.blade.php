@extends('layouts.app')

@section('content')
<div class="container">
                <h1>Producten</h1>
                 <div class="card-deck">
                    @foreach ($products as $product)
                    <div class="card_size card">
                    <img src="{{$product->image}}" class="card_image_size card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">{{$product->description}}</p>
                          <a href="#" class="btn btn-primary">&#8364;{{$product->price}} ADD TO CART</a>
                        </div>
                      </div>
        @endforeach
                 </div>
                </div>
            </div>
        </div>
@endsection
