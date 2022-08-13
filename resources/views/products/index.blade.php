@extends('layouts/app')

@section('content')
<h1>Products</h1>
@foreach($products as $product)
    <div>
        <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
    </div>
@endforeach