@extends('layouts.base')

@section('pageTitle')
    La Molisana - Prodotti
@endsection

@section('mainContent')
    <h1>Prodotti</h1>
    <div class="container">
        <div class="row">
            @foreach ($lunghe as $item)
            <div class="col">
                <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                <h4>{{$item['titolo']}}</h4>
            </div>
            @endforeach
        </div>
        <div class="row">
            @foreach ($corte as $item)
            <div class="col">
                <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                <h4>{{$item['titolo']}}</h4>
            </div>
            @endforeach
        </div>
        <div class="row">
            @foreach ($cortissime as $item)
            <div class="col">
                <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                <h4>{{$item['titolo']}}</h4>
            </div>
            @endforeach
        </div>
    </div>
@endsection