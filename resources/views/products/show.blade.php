@extends('layouts.layout')

@section('title')
    create product
@stop

@section('body')

    @include('layouts.menu')

    {!! Form::open([
        'method' => 'delete',
        'route' => ['product.destroy', $product->id]
    ]) !!}

    {{$product->product_name}}
    {{$product->product_price}}
    {{$product->product_desc}}
    {{$product->product_code}}

    <br>
    <br>
    <br>

    <a href="{{route('product.edit', $product->id)}}">edit</a>

    {!! Form::submit('Delete') !!}

    {!! Form::close() !!}


@stop
