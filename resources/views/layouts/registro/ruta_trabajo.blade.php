<form action="/ruta_limpieza/save" method="get">
    {{ csrf_field() }}
    {{$id_emp}}
    <input type="hidden" name="id_emp" value="{{$id_emp}}">
    <input type="hidden" name="id_dep" value="{{$habitacion}}">

<div>
    <table>
        <td>
{{--  primera tabla es para reposiciones  --}}
    <table style="display: inline-block;" >
        <thead>
        <tr>
            <th>Item</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Jabón</td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Toallas</td>
            <td> <input id="toallas" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Sabanas</td>
            <td> <input id="sabanas" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Papel higienico</td>
            <td> <input id="papel_higienico" type="number" class="validate" value="0" name="reposiciones[]" > </td>
        </tr>
        <tr>
            <td>Otro <input id="otro" type="text"  name="otro_limp" > </td>
            <td> <input id="otro_cant" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        </tbody>

    </table>
        </td>
        <td>

{{--  segunda tabla es para reposiciones de minibar --}}

    <table style="display: inline-block;">
        <thead>
        <tr>
            <th>Item</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Galletas</td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Gaseosas</td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Agua</td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Chocolate</td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        <tr>
            <td>Otro <input id="otro" type="text" name="otro_serv" > </td>
            <td> <input id="jabon" type="number" class="validate" value="0" name="reposiciones[]"> </td>
        </tr>
        </tbody>
    </table>
        </td>


    </table>
</div>
<br><br><br>
<div>
    <label  style="font-weight: bold; "> Observaciones: </label>
    <input type="text" name="observaciones" >
</div>
<br><br><br>
<div>
    <input type="submit" class="waves-effect waves-light btn" value="Registrar" align="left">

    <a href="/ruta_limpieza" type="button" class="waves-effect waves-light btn" value="Cancelar" align="right">Cancelar</a>
    <a href="/ruta_limpieza/mantenimiento" type="button" class="waves-effect waves-light btn right" value="Mantenimiento" align="right">Mantenmiento</a>
</div>
</form>