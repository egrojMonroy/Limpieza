<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eventualidades</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: darkgrey;
            padding: 15px;
        }
    </style>
</head>
<body background="/images/portada.jpg">

<br><Br><br><Br>
<form action="/eventualidades/guardar" method="get">
<div class="container text-center">
    <div class="row">
        <div class="col-sm-3 well">
            <div class="well">
                <p><h3>Empleados</h3></p>
            </div>
            <select class="form-control" name="empleado">
                @foreach ($empleados as $fila)
                    <option value="{{$fila->id}}" id="">
                        {{$fila->nombre}}

                    </option>
                @endforeach
            </select>
            <div class="panel-footer">
                <input type="submit"  class="btn btn-primary btn-md" value="Asignar">
            </div>
            <a href="super" class="btn btn-primary" >Volver </a>

        </div>
        <div class="col-sm-7">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default text-left">
                        <div class="panel-body">
                            <p>EVENTUALIDADES</p>

                        </div>
                    </div>
                </div>
            </div>
            @foreach($eventualidades as $eventualidad)
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">

                            <div class="col-md-6">
                        <b>Fecha: </b>
                        {{$eventualidad->dato_temp}}
                        <br>
                        <b>Habitacion :</b>
                        {{$eventualidad->dependencia_id}}
                        <br>
                        <b>Objeto :</b>
                        {{$eventualidad->objeto}}
                            </div>


                            <div class="col-md-6">
                                <b>Descripcion :</b>

                                @for($i=0;$i<strlen($eventualidad->descripcion);$i++ )
                                    {{$eventualidad->descripcion{$i} }}

                                @endfor
                            </div>
                    <br><BR><br><br><br>
                        <input type="radio" name="tarea" value="{{$eventualidad->id}}">
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</div>
</form>
</body>
</html>
