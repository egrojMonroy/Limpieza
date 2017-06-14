<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" rel="stylesheet"/>
<body background="/images/portada.jpg">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    @if(isset($orden_mantenimiento))
                        @include('layouts.registro.orden_mantenimiento')
                    @else
                        @include('layouts.registro.ruta_trabajo')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>