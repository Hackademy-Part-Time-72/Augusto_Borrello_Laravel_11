@extends('layouts.app')

@section('content')

<h2 class="mb-4">Modifica Prodotto</h2>

<form action="{{ route('products.update',$product) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">

<label class="form-label">Nome</label>

<input type="text" name="name" class="form-control" value="{{ $product->name }}">

</div>

<div class="mb-3">

<label class="form-label">Descrizione</label>

<textarea name="description" class="form-control">{{ $product->description }}</textarea>

</div>

<div class="mb-3">

<label class="form-label">Prezzo</label>

<input type="number" name="price" step="0.01" class="form-control" value="{{ $product->price }}">

</div>

<div class="mb-3">

<label class="form-label">Categoria</label>

<select name="category_id" class="form-control">

@foreach($categories as $category)

<option value="{{ $category->id }}"
@if($category->id == $product->category_id) selected @endif>

{{ $category->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label class="form-label">Nuova immagine</label>

<input type="file" name="image" class="form-control">

</div>

<button class="btn btn-success">
Aggiorna prodotto
</button>

<a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">
← Torna indietro
</a>

</form>
@endsection

