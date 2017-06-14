<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>EMPLEADO</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">HOY</a></li>
                <li><a href="#section2">EVENTUALIDADES</a></li>

            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>



                <div class="col-sm-7">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default text-left">
                                <div class="panel-body">
                                    <p contenteditable="true">TAREAS</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="panel panel-default form-inline">

                                <div class="panel-body">
                                    <button  type="button" class="btn btn-primary btn-md col-sm-10">
                                        <h2>  @foreach($tareas as $tarea)
                                                {{$tarea}}
                                            @endforeach
                                        </h2>
                                    </button>   <div>
                                        <h1><span class="label label-default">New</span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default form-inline">

                                <div class="panel-body">
                                    <button  type="button" class="btn btn-primary btn-md col-sm-10">
                                        <h2>  @foreach($tareas as $tarea)
                                                {{$tarea}}
                                            @endforeach
                                        </h2>
                                    </button>   <div>
                                        <h1><span class="label label-default">
                                                    @foreach($estados as $fila)
                                                        {{$fila->estado}}
                                                    @endforeach


                                            </span></h1>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
