<!-- 1 al 6 son los pisos, 0 es personalizar, 7 es check outs, 8 son las habitaciones check in-->

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de tarea </span>
        <input type="text" class="form-control" placeholder="Nombre de tarea" aria-describedby="basic-addon1">
    </div>
    <label for="sel1">Select list:</label>
    <select class="form-control" id="sel1">
        @foreach($ubicaciones as $row)
           <option class="panel-button" data-panelid="1" name="ubicacion" value="{{$row->id}}"> {{$row->ubicacion}}</option>
        @endforeach
        <option class="panel-button" data-panelid="2" name="ubicacion" value="7">Check out </option>
        <option class="panel-button" data-panelid="3" name="ubicacion" value="8">Check in </option>
        <option class="panel-button" data-panelid="4" name="ubicacion" value="0"> Personalizar</option>
    </select>

    <input type="submit" class="btn btn-primary">
</div>
<div class="panel panel-default" id="dis" disabled="true">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <!-- Table -->
    <table class="table">
        <tr>
        @for($i=0;$i<6;++$i)
            <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                {{$habitaciones[$i]->identificador}}</td>
        @endfor
        </tr>
        <tr>
            @for(;$i<6*2;++$i)
                <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*3;++$i)
                <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*4;++$i)
                <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*5;++$i)
                <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*6;++$i)
                <td><input type="checkbox" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>



    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(function(){
        $('#sel1').change(function () {
            var e = document.getElementById("sel1");
            var strUser = e.options[e.selectedIndex].value;
            if(strUser==0){
                $('#dis').toggle(true);
            }else{
                $('#dis').toggle(false);
            }
        });

    });
</script>
