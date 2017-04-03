@extends('layout')
@section('content')
<h2>Produits vendus</h2>
<ul class="list-group">
	@foreach($products as $product)
		<li class="list-group-item">
			{{ $product->name }} - {{ $product->income }} €
			<div class="progress" style="width: 50%; float: right;">
		  		<div class="progress-bar" role="progressbar" aria-valuenow="{{ ( $product->sold / $product->availability ) * 100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ ( $product->sold / $product->availability ) * 100 }}%"></div>
			</div>
			<span class="badge" style="margin-right: 15px; padding: 5px 10px;">{{ $product->sold }} / {{ $product->availability }}</span>
		</li>
	@endforeach
</ul>
<p>Dans la caisse : {{ $totalIncome}} €</p>
<p>Revenus totaux pour l'oeuvre de charité : {{ $netIncome }} €</p>
@endsection