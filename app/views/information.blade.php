@extends('layout.master')
@section('content')		
		<div>
			<table class="infos">
				<tr>
					<th>Version de l'API</th>
					<td>1.1</td>
				</tr>
				<tr>
					<th>Tailles d'avatar disponibles</th>
					<td> 100x100, 200x200, 300x300</td>
				</tr>
				<tr>
					<th>Taille d'avatar par défaut</th>
					<td>Taille de l'image originale</td>
				</tr>
				<tr>
					<th>Formats images supportés</th>
					<td>JPEG, PNG, JPG</td>
				</tr>
			</table>

			{{ HTML::link('./../../ProjetLaravelJQuery/', 'Retour'); }}
		</div>
@stop