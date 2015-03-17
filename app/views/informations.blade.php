@extends('layout.info')

@section('content')
	
	{{"<table>
				<tr>
					<th>Version de l'API</th>
					<td>??</td>
				</tr>
				<tr>
					<th>Tailles d'avatar disponibles</th>
					<td>??</td>
				</tr>
				<tr>
					<th>Taille d'avatar par défaut</th>
					<td>??</td>
				</tr>
				<tr>
					<th>Formats images supportés</th>
					<td>??</td>
				</tr>
		</table>"}}

	{{"<br/>"}}
	{{"<a href='./'>Revenir à l'accueil</a>"}}
	<?php echo HTML::link('/', 'Revenir à l\'accueil'); ?>

@stop