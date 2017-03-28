
@extends('layout')

@section('content')
@if(isset($success))
	<p>Votre produit a bien été ajouté !</p>
@endif
<h2>Ajouter un produit</h2>
<form action="{{ route('products.create') }}" method="POST">
	<fieldset>
		<div>
			<label for="name">Nom du produit</label>
			<input type="text" name="name">
		</div>
		<div>
			<label for="icon">Icône du produit</label>
			<input type="text" name="icon">
		</div>
		<div>
			<label for="price">Prix brut</label>
			<input type="text" name="price">
		</div>
		<div>
			<label for="salePrice">Prix de vente</label>
			<input type="text" name="salePrice">
		</div>
		<div>
			<label for="availability">Quantité disponible</label>
			<input type="text" name="availability">
		</div>

		<input type="submit" value="Ajouter le produit">
	</fieldset>
</form>
@endsection