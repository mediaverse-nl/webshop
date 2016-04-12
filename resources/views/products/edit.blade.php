@extends('layouts.layout')

@section('title')
    product edit
@stop

@section('body')

    @include('layouts.menu')

    {!! Form::model($product, [
        'method' => 'patch',
        'route' => ['product.update', $product->id]
    ]) !!}

    {!! Form::label('price', 'Price') !!}
    {!! Form::text('price', $product->product_price, [
         'class' => "form-control",
         'placeholder' => "prijs",
    ]) !!}

    <br>

    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $product->product_name, [
          'class' => "form-control",
          'placeholder' => "name",
    ]) !!}

    <br>

    {!! Form::submit('Edit') !!}

    {!! Form::close() !!}


@stop
