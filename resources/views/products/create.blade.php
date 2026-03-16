@extends('layouts.app')

@section('content')

<h2 class="mb-4">Nuovo Prodotto</h2>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">Nome prodotto</label>

<input type="text" name="name" class="form-control">

@error('name')
<div class="text-danger">
{{ $message }}
</div>
@enderror

</div>

<div class="mb-3">

<label class="form-label">Descrizione</label>

<textarea name="description" class="form-control"></textarea>

</div>

<div class="mb-3">

<label class="form-label">Prezzo</label>

<input type="number" name="price" step="0.01" class="form-control">

@error('price')
<div class="text-danger">
{{ $message }}
</div>
@enderror

</div>

<div class="mb-3">

<div class="mb-3">

<label class="form-label">Categoria</label>

<select name="category_id" class="form-control">

<option value="">Seleziona una categoria</option>

@foreach($categories as $category)

<option value="{{ $category->id }}">
{{ $category->name }}
</option>

@endforeach

</select>

@error('category_id')
<div class="text-danger">
{{ $message }}
</div>
@enderror

<div class="mb-3">

<label class="form-label">Immagine prodotto</label>

<input type="file" name="image" class="form-control">
<img id="preview" width="120" class="mt-2"/>
<script>

document.querySelector('input[name="image"]').addEventListener('change', function(e){

const file = e.target.files[0];
const reader = new FileReader();

reader.onload = function(e){
document.getElementById('preview').src = e.target.result;
}

reader.readAsDataURL(file);

});

</script>

</div>

<button class="btn btn-success">
Salva prodotto
</button>

<a href="{{ route('products.index') }}" class="btn btn-secondary">
Indietro
</a>

</form>

@endsection