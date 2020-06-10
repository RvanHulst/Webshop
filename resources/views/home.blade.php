@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>Categories</h1>
                 <div>
                    @foreach ($categories as $category)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <a href="/category/{{$category->id}}" class="btn btn-primary">Show products</a>
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
