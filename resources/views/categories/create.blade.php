{{-- @extends('layouts.app')

@section('content')

<div class="container">

<h2 class="mb-4">Categorie</h2>

<a href="{{ route('categories.create') }}" class="btn btn-success mb-3">
+ Nuova Categoria
</a>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Nome</th>
<th>Azioni</th>
</tr>

</thead>

<tbody>

@foreach($categories as $category)

<tr>

<td>{{ $category->id }}</td>

<td>{{ $category->name }}</td>

<td>

<a href="{{ route('categories.show',$category) }}" class="btn btn-info btn-sm">
Visualizza
</a>

<a href="{{ route('categories.edit',$category) }}" class="btn btn-warning btn-sm">
Modifica
</a>

<form action="{{ route('categories.destroy',$category) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Elimina
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection --}}

@extends('layouts.app')

@section('content')

<div class="container">

<h2>Crea Categoria</h2>

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="mb-3">

<label class="form-label">Nome categoria</label>

<input type="text" name="name" class="form-control">

</div>

<button type="submit" class="btn btn-success">
Salva Categoria
</button>

<a href="{{ route('categories.index') }}" class="btn btn-secondary">
Indietro
</a>

</form>

</div>

@endsection