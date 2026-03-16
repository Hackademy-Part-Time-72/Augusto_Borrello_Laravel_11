@extends('layouts.app')

@section('content')

<h2>Dettaglio Prodotto</h2>

<div class="card">

<div class="card-body">

@if($product->image)

<img src="{{ asset('storage/'.$product->image) }}" width="200">

@endif

<h4 class="mt-3">{{ $product->name }}</h4>

<p>{{ $product->description }}</p>

<p><strong>Prezzo:</strong> {{ $product->price }} €</p>

<p><strong>Categoria:</strong> {{ $product->category->name }}</p>

<a href="{{ route('products.index') }}" class="btn btn-secondary">
Torna indietro
</a>

</div>

</div>

@endsection