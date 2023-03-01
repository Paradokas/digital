@extends('layouts.base')
@section('title', 'product')
@section('content')
    <div class="container mt-3">
        @foreach ($collections as $collection)
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h1>{{ $collection->title }}</h1>

                        </div>
                    </div>
                </div>
                @foreach ($collection->products as $product)
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">Цена: {{ $product->price }} Коллекция: {{ $collection->title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
