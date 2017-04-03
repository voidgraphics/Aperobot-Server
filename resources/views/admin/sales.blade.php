



@extends('layout')

@section('content')
<h2>Produits vendus</h2>
<ul>
	@foreach($products as $product)
		<li>{{ $product->sold }} {{ $product->name }} - {{ $product->income }}€</li>
	@endforeach
</ul>
<p>Revenus bruts: {{ $totalIncome}}€</p>
@endsection