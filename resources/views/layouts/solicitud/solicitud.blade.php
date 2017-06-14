<form action="solicitud/store" method="get">
	<div class="form-group">
		<label for="sel1">Seleccionar Empleado:</label>
		<select class="form-control" id="sel1" name="empleados">
        @foreach($empleados as $row)
           <option class="panel-button" data-panelid="1" name="empleados" value="{{$row->id}}"> {{$row->empleados}}</option>
        @endforeach
    </select>
	</div>
</form>