@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>Producten</h1>
                 <div>
                    @foreach ($products as $product)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <a href="" class="btn btn-primary">Show products</a>
            </div>
        </div>
        @endforeach
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
