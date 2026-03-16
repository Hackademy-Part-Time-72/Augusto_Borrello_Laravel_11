@extends('layouts.app')

@section('content')

<h2>Nuova Categoria</h2>

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="mb-3">

<label class="form-label">Nome categoria</label>

<input type="text" name="name" class="form-control">

</div>

<div class="mb-3">

<label class="form-label">Descrizione</label>

<textarea name="description" class="form-control"></textarea>

</div>

<button class="btn btn-success">
Salva
</button>

<a href="{{ route('categories.index') }}" class="btn btn-secondary">
Indietro
</a>

</form>

@endsection