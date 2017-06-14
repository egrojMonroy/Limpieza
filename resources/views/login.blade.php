<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<form action="/login" method="get">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Registro</h3>
    </div>
    <div class="panel-body">

        @if(isset($msj))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{$msj}}
            </div>
        @endif

        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input name="nombre" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
        </div>


        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
        </div>
        <button type="submit" class="btn btn-primary" >Enviar </button>

    </div>
</div>
</form>