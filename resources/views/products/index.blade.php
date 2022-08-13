@extends('layouts/app')

@section('content')
    @component('components/alert')  
        @slot('type') success @endslot
        All products have been loaded
    @endcomponent
    <h1>Products</h1>
    @foreach($products as $product)
        <div>
            <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
        </div>
    @endforeach