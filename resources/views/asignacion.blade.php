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
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
            </ul>
        </div>
    </div>
</nav>
<form action="" method="get">
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
                <input type="submit"  class="btn btn-primary btn-md">Asignar</a>
            </div>
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
                        <input type="radio" name="tarea" value="1">
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
