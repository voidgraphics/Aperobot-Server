
@extends('layout')

@section('content')
@if(isset($success))
	<p>Votre produit a bien été ajouté !</p>
@endif
<h2>Ajouter un produit</h2>
<form action="{{ route('products.create') }}" method="POST">
	<fieldset>
		<div class="form-group">
			<label for="name">Nom du produit</label>
			<input class="form-control" type="text" id="name" name="name">
		</div>
		<div class="form-group">
			<label for="icon">Icône du produit</label>
			<input class="form-control" type="text" id="icon" name="icon">
		</div>
		<div class="form-group">
			<label for="price">Prix brut</label>
			<input class="form-control" type="text" id="price" name="price">
		</div>
		<div class="form-group">
			<label for="salePrice">Prix de vente</label>
			<input class="form-control" type="text" id="salePrice" name="salePrice">
		</div>
		<div class="form-group">
			<label for="availability">Quantité disponible</label>
			<input class="form-control" type="text" id="availability" name="availability">
		</div>

		<input class="btn btn-primary" type="submit" value="Ajouter le produit">
	</fieldset>
</form>
@endsection