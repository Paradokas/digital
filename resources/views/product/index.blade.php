@extends('layouts.base')
@section('title', 'Products')

@section('content')

    <div class="container mt-3 text-center">
        <div class="row">
            @php($index = 1)
            @foreach ($collections as $collection)

                @if($index % 3 === 0)
                    <x-card>
                    </x-card>
                    @php($index = 1)
                @endif

                <x-card>
                    <h1>{{ $collection->title }}</h1>
                </x-card>

                @foreach ($collection->products as $product)
                    <x-card>
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Цена: {{ $product->price }} | {{ $collection->title }}</p>
                    </x-card>
                    @php($index++)
                @endforeach

                @php($index++)
            @endforeach
        </div>
    </div>

@endsection
