<!DOCTYPE html>
<html>
<head>
	<title>Asignacion de Notificaciones</title>
</head>
<body>
	<div class="container-fluid">
		<nav class="col-sm-12 col-md-8 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
				<div class="form-group">
		        	<label class="col-xs-12 control-label">Lista de Empleados</label>
		            <div class="col-xs-20 selectContainer">
		            	<select class="form-control" name="size">
		                	<option value="">
		                    	@foreach ($empleados as $fila)
		                        {{$fila->nombre}}
		                        @endforeach
		                    </option>
		                </select>
		        	</div>
		        </div>
			</ul>
		</nav>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-">
            <div class="form-inline">
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="lista">
                                <div class="form-group">
	                                <div class="list-group">
	                                    <a href="#" class="list-group-item active">
	                                        <h2 ALIGN=center style="color:white";>Lista de Tareas</h2>
	                                    </a>
                                    	<a href="#" class="list-group-item">
                                            @foreach ($tareas as $fila)
                                                {{$fila->nombre}}
                                            @endforeach
                                   		</a>
                                	</div>
                            	</div>
                            </ul>
                        </div>
                    </div>
                </a>
        	</div>
		</main>
	</div>
</body>
</html>