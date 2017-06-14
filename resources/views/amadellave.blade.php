<!DOCTYPE html>
<html>
<head>
	<title>Ama de Llave</title>
</head>
<body>
	<form action="/calendario/borrar" method="get">
        	<div class="panel panel-default" id="dis" disabled="true">
            	<div class="form-inline">
					<div class="panel panel-primary ">
	                    <div class="panel-heading">Habitaciones</div>
	                    <div class="panel-body">
	                        <ul class="list-group">
	                            <tr>
        						@for($i=0;$i<26;++$i)
            					<td>{{$habitaciones[$i]->identificador}}</td>
        						@endfor
       							</tr>
	                        </ul>
	                    </div>
	    
	                </div>
	            </div>
	        </div>
	</form>
</body>
</html>