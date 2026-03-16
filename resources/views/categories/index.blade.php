@extends('layouts.app')

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
<th>genere</th>
</tr>

</thead>

<tbody>

@foreach($categories as $category)

<tr>
{{-- <td>{{ $product->category->name ?? 'Nessuna' }}</td> --}}
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
</td>

</form>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection