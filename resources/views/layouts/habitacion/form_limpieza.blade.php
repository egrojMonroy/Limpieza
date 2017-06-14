
<br>
Habitacion N°: {{$id_hab}}
<br><br><br><br>
<form action="/habitaciones/store_limp/" method="get">
    {{ csrf_field() }}
    <table align="center" >
    <tr>
        <td>  <label>Seleccionar objeto de limpieza </label></td>
        <td>
            <div>
                <select name="objeto_id">
                    <option value="" disabled selected >Escoge que esta mal</option>
                    @foreach($objetos as $objeto)
                        <option value="{{$objeto->objeto_id}}" id="objeto_id" >{{$objeto->identificador}}</option>
                    @endforeach
                </select>

            </div>
        </td>

    </tr>
    <tr>
        <td><label>Descripcion </label>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" id="descripcion" name="descripcion"></textarea>
                            <label for="textarea1"></label>
                        </div>
                    </div>
                </form>
            </div>
        </td>
    </tr>
    <tr>
    <input type="hidden" value="{{$id_hab}}" id="id_hab" name="id_hab">
        <td><input type="submit" value="Enviar" align="center" class="waves-effect waves-light btn-large"></td>
        </td>
        <td><a  href="{{ URL::previous() }}" class="waves-effect waves-light btn-large">Cancelar</a></td>
    </tr>
</table>

</form>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
