<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alta Categoria</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
</head>
<body>
	<div class="container">
		<!--<h1>Alta Categoria</h1>
		{!!Form::model( ['action' => 'CategoriaController@crearCategoria'])!!}

		<div class="form-group">
			{!! Form::label('categoria','Categoria')!!}
			{!! Form::text('categoria',old('categoria'),['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripcion')!!}
			{!! Form::text('descripcion',old('descripcion'),['class'=>'form-control'])!!}
		</div>

		{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
	{!!Form::close()!!}	-->


	<h1>Alta Categoria</h1>

	<form action="/alta">
	    <div class="form-group">
	      <label for="categoria">Categoria:</label>
	      <input type="text" class="form-control" id="categoria" placeholder="Nombre categoria" name="categoria">
	    </div>
	    <div class="form-group">
	      <label for="descripcion">Descripcion</label>
	      <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" name="descripcion">
	    </div>
	    
	    <button type="submit" class="btn btn-success">Guardar</button>
	</form>
	</div>
	
	<hr>

	
			

	
</body>
</html>