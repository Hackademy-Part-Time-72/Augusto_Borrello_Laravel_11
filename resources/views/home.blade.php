@extends('layouts.app')

@section('content')

<div class="container text-center mt-5">

<h1 class="mb-4">
Sistema Gestione Prodotti
</h1>

<p class="lead">
Applicazione Laravel per gestire prodotti e categorie.
</p>

<div class="row mt-5">

<div class="col-md-6">

<div class="card shadow">

<div class="card-body">

<h4>Gestione Prodotti</h4>

<p>Visualizza, modifica e aggiungi prodotti.</p>

<a href="{{ route('products.index') }}" class="btn btn-primary">
Vai ai Prodotti
</a>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card shadow">

<div class="card-body">

<h4>Gestione Categorie</h4>

<p>Gestisci le categorie dei prodotti.</p>

<a href="{{ route('categories.index') }}" class="btn btn-success">
Vai alle Categorie
</a>

</div>

</div>

</div>

</div>

</div>

@endsection