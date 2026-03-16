@extends('layouts.app')

@section('content')

<h2 class="mb-4">Lista Prodotti</h2>



<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
Nuovo Prodotto
</a>
<a href="{{ url('/') }}" class="btn btn-secondary mb-3">
← Torna alla homepage
</a>

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Immagine</th>
<th>Nome</th>
<th>Prezzo</th>
<th>Categoria</th>
<th>Azioni</th>
</tr>
</thead>

<tbody>

@foreach($products as $product)

<tr>

<td>
@if($product->image)
<img src="{{ asset('storage/'.$product->image) }}" width="80">
@endif
</td>

<td>{{ $product->name }}</td>

<td>{{ $product->price }} €</td>

<td>{{ $product->category->name }}</td>

<td>

<a href="{{ route('products.show',$product) }}" class="btn btn-info btn-sm">
Visualizza
</a>

<a href="{{ route('products.edit',$product) }}" class="btn btn-warning btn-sm">
Modifica
</a>

<form action="{{ route('products.destroy',$product) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Sei sicuro di voler eliminare questo prodotto?')">

Elimina

</button>



</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection