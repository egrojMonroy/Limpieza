<!-- Compiled and minified CSS -->
<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" rel="stylesheet"/>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(isset($limpieza))
                        @include('layouts.habitacion.form_limpieza')
                    @elseif (isset($mantenimiento))
                        @include('layouts.habitacion.form_mantenimiento')
                    @else
                        @include('layouts.habitacion.form_habitacion')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>