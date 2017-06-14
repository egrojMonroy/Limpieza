






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cronograma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body background="/images/portada.jpg">

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <div class="wrap">
                <form action="/calendario2" method="get">
                    <div class="form-group">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h2 ALIGN=center style="color:white";>Lista de Tareas</h2>
                            </a>

                            <a href="#" class="list-group-item" >
                                @foreach ($tareas as $fila)
                                    <div>
                                    <label class="form-check-label">

                                        <input type="checkbox" class="labores"  id="{{$fila->id}}" name="tareas[]" value="{{$fila->id}}">
                                        {{$fila->nombre}}

                                    </label>
                                    </div>
                                @endforeach
                            </a>

                        </div>
                    </div>
                    <input type="hidden" name="id_emp" value="{{$empleado}}">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Dia</label>
                        <div class="col-xs-5 selectContainer">
                            <select class="form-control" name="size">
                                <option value="lunes">Lunes</option>
                                <option value="martes">Martes</option>
                                <option value="miercoles">Miercoles</option>
                                <option value="jueves">Jueves</option>
                                <option value="viernes">Viernes</option>
                                <option value="sabado">Sabado</option>
                                <option value="domingo">Domingo</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-sm-2">
                        <button type="submit"  name="submit"class="btn btn-danger"><h5 style="color:white";>Agregar</h5></button>
                    </div>
                    <a href="/super" class="btn btn-primary" >Volver </a>
                </form>
            </div>
        </div>
        <form action="/calendario/borrar" method="get">
            <input type="hidden" name="id_emp" value="{{$empleado}}">
        <div class="col-sm-9">
            <div class="form-inline">

                <div class="panel panel-primary ">
                    <div class="panel-heading">Lunes</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[0]))
                            @foreach($dia[0] as $row)
                            <li class="list-group-item">{{$row}}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit"value="lunes" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Martes</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[1]))
                                @foreach($dia[1] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit"value="martes" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Miercoles</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[2]))
                                @foreach($dia[2] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit"value="miercoles" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Jueves</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[3]))
                                @foreach($dia[3] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit"value="jueves" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Viernes</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[4]))
                                @foreach($dia[4] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit"value="viernes" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Sabado</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[5]))
                                @foreach($dia[5] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit" value="sabado" class="btn btn-primary" aria-label="Right Align"> Eliminar</button>
                    </div>
                </div>

                <div class="panel panel-primary ">
                    <div class="panel-heading">Domingo</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @if(isset($dia[6]))
                                @foreach($dia[6] as $row)
                                    <li class="list-group-item">{{$row}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit"  name="submit" value ="domingo" class="btn btn-primary" > Eliminar</button>
                    </div>
                </div>


            </div>
        </div>
        </form>
    </div>
</div>


</body>
</html>


