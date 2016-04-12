@extends('layouts.layout')

@section('title')
    producten pagina
@stop

@section('body')

    @include('layouts.menu')

    @foreach($products as $product)
        <h3>{{$product->product_name}}</h3>
        <span>{{$product->product_price}}</span>
        <span>{{$product->id}}</span>
        <span>{{$product->product_desc}}</span><br>
        <a href="{{route('product.show', $product->id)}}">edit</a>
    @endforeach

@stop
