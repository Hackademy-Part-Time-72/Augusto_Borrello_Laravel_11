@extends('layouts.app')

@section('content')

<div class="container">

<h2>Categoria: {{ $category->name }}</h2>

<hr>

<h4>Prodotti in questa categoria</h4>

@if($category->products->count() > 0)

<ul class="list-group">

@foreach($category->products as $product)

<li class="list-group-item">
{{ $product->name }} - € {{ $product->price }}
</li>

@endforeach

</ul>

@else

<p>Nessun prodotto in questa categoria.</p>

@endif

<a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">
← Torna alle categorie
</a>

</div>

@endsection