<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <title>Cronograma</title>

    <!-- Bootstrap core CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css2/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
                <div  href="#" class="list-group-item active">
                    <div class="wrap">
                        <form action="calendario2" method="get">
                            <div class="form-group">
                                <div class="list-group">
                                    <a href="#" class="list-group-item active">
                                        <h2 ALIGN=center style="color:white";>Lista de Tareas</h2>
                                    </a>

                                    <a href="#" class="list-group-item" >
                                        @foreach ($tareas as $fila)
                                        <label class="form-check-label">

                                                <input type="checkbox" class="labores"  id="{{$fila->id}}" name="tareas[]" value="{{$fila->id}}">
                                                {{$fila->nombre}}

                                        </label>
                                        @endforeach
                                    </a>

                                </div>
                            </div>

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
                                <button type="submit" class="btn btn-danger"><h5 style="color:white";>Agregar</h5></button>
                            </div>
                        </form>
                    </div>
                </div>
            </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-">
            <div class="tareas"><li><h1 ALIGN=center>CRONOGRAMA</h1></li></div>
                <div class="form-inline">
                    <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>

                                    <a href="#" class="list-group-item active">
                                        <h1  ALIGN=center style="color:white";>Lunes</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1 ALIGN=center style="color:white";>Martes</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1 ALIGN=center style="color:white"; >Miercoles</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1 ALIGN=center style="color:white"; >Jueves</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1 ALIGN=center style="color:white";>Viernes</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">

                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1  ALIGN=center style="color:white";>Sabado</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="tareas">
                        <div class="wrap">
                            <ul class="lista" id="lista" title="LUNES">
                                <li>
                                    <a href="#" class="list-group-item active">
                                        <h1 ALIGN=center style="color:white";>Domingo</h1>
                                    </a>
                                </li>
                                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                            </ul>
                        </div>
                    </div>
                </a>

            </div>
        </main>
            //

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js2/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js2/ie10-viewport-bug-workaround.js"></script>
<script src="js2/main.js"></script>
</body>
</html>
