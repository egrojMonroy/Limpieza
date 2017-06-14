<!-- 1 al 6 son los pisos, 0 es personalizar, 7 es check outs, 8 son las habitaciones check in-->
<body background="/images/portada.jpg">
<form action="/creacion/store" method="get">
<div class="form-group">

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de tarea </span>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre de tarea" required aria-describedby="basic-addon1">
    </div>
    <label for="sel1">Select list:</label>
    <select class="form-control" id="sel1" name="ubicacion">
        @foreach($ubicaciones as $row)
           <option class="panel-button" data-panelid="1" name="ubicacion" value="{{$row->id}}"> {{$row->ubicacion}}</option>
        @endforeach
        <option class="panel-button" data-panelid="2" name="ubicacion" value="7">Check out </option>
        <option class="panel-button" data-panelid="3" name="ubicacion" value="8">Check in </option>
        <option class="panel-button" data-panelid="4" name="ubicacion" value="0"> Personalizar</option>
    </select>


</div>
<div class="panel panel-default" id="dis" disabled="true">
    <!-- Default panel contents -->
    <div class="panel-heading">Creacion de tareas </div>
    <!-- Table -->
    <table class="table">
        <tr>
        @for($i=0;$i<6;++$i)
            <td><input type="checkbox" class="piso1" name="habitaciones[]" id="{{$habitaciones[$i]->id}}" value="{{$habitaciones[$i]->id}}">
                {{$habitaciones[$i]->identificador}}</td>
        @endfor
        </tr>
        <tr>
            @for(;$i<6*2;++$i)
                <td><input type="checkbox" class="piso2" name="habitaciones[]" id="{{$habitaciones[$i]->id}}" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*3;++$i)
                <td><input type="checkbox" class="piso3" name="habitaciones[]" id="{{$habitaciones[$i]->id}}" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*4;++$i)
                <td><input type="checkbox" class="piso4" name="habitaciones[]" id="{{$habitaciones[$i]->id}}" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*5;++$i)
                <td><input type="checkbox" class="piso5" id="{{$habitaciones[$i]->id}}" name="habitaciones[]" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>
        <tr>
            @for(;$i<6*6;++$i)
                <td><input type="checkbox" class="piso6" name="habitaciones[]" id="{{$habitaciones[$i]->id}}" value="{{$habitaciones[$i]->id}}">
                    {{$habitaciones[$i]->identificador}}</td>
            @endfor
        </tr>



    </table>
</div>

    <input type="hidden" id="hidden" name="checkins" data-field-id="{{$checkins}}">
    <input type="hidden" id="hidden1" name="checkout" data-field-id="{{$checkouts}}">

<input type="submit" class="btn btn-primary">
    <a href="super" class="btn btn-primary" >Volver </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
    $(function(){

        //var checkin = (document.getElementById("hidden"));
        var checkins = $('#hidden').data("field-id");
        var checkouts = $('#hidden1').data("field-id");


        $('#sel1').change(function () {
            var e = document.getElementById("sel1");
            var strUser = e.options[e.selectedIndex].value;
            for (var i = 1; i <= 6; ++i) {
                $('.piso' + i).attr('checked', false);
            }
            if(strUser!=0){

                if(strUser == 8){
                    console.log(checkins.length);
                    console.log("ASDFADSFASD");
                    for(var i=0;i<checkins.length;++i){
                        $('#'+checkins[i].id).attr('checked',true);
                    }
                }else if(strUser==7){
                    for(var i=0;i<checkouts.length;++i){
                        $('#'+checkouts[i].id).attr('checked',true);
                    }
                }else {
                    $('.piso' + strUser).attr('checked', true);


                }
            }
        });

    });
</script>
