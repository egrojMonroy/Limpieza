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

    <title>Cronograma</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>



<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/main.js"></script>
<form action="/calendario/cronograma" method="get">
<div class="form-group">
    <label class="col-xs-3 control-label">Seleccione empleado</label>
    <div class="col-xs-5 selectContainer">
        <select class="form-control" name="empleado">
            @foreach ($empleados as $fila)
                <option value="{{$fila->id}}" id="">
                    {{$fila->nombre}}

                </option>
            @endforeach
        </select>
    </div>
    <input type="submit" >
    <a href="super" class="btn btn-primary" >Volver </a>
</div>
</form>