<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categorias</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Categorias</h1>
	<hr>
		<div class="container">
		<table class="table table-striped">
		  <thead>
		      <tr>
		        <th>Categoria</th>
		        <th>Descripcion</th>
		        <th>Acciones</th>
		      </tr>
		   </thead>
		@foreach($categorias as $categoria)
		  <tbody>
		  	<tr>
		    
	    		<td>{{$categoria->categoria}}</td>
		    	<td>{{$categoria->descripcion}}</td>
		    	<td>
		    		<button class="btn-warning">Editar</button>
		    		<button class="btn-danger">Eliminar</button>
		    	</td>
	    	
			
		  </tr>	
		  </tbody>
		@endforeach  
		</table>	
		<button class="btn-success">Agregar</button>
		</div>
		
		
		
	
</body>
</html>