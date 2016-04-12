@extends('layouts.layout')

@section('title')
    create product
@stop

@section('body')


    @include('layouts.menu')

    {!! Form::open(['route' => 'product.store']) !!}

    {!! Form::text('price', '', [
          'class' => "form-control",
          'placeholder' => "prijs",
    ]) !!}

    {!! Form::text('name', '', [
          'class' => "form-control",
          'placeholder' => "name",
    ]) !!}

    {!! Form::submit('Create') !!}

    {!! Form::close() !!}




@stop
