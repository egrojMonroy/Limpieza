<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" rel="stylesheet"/>

<form action="/ruta_limpieza" method="get">
    <br><Br><br><br>
    <div class="center-align">
        <div>
            <label  style="font-weight: bold; "><h3> Motivo de mantenimiento: </h3> </label>
            <input class="materialize-textarea" data-length="300" name="motivo" >
        </div>
    </div>

    <br><br><br><br>

    <div class="center-align">
        <input type="submit" class="waves-effect waves-light btn" value="Enviar" align="center">
        <a href="/ruta_limpieza" type="button" class="waves-effect waves-light btn" value="Cancelar" align="right">Cancelar</a>
    </div>

</form>
