<table>
    <tr>
        <td colspan="7" style="text-align:center">
            <b>ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR</b>
        </td>
    </tr>
    <tr>
        <td colspan="7" style="text-align:center">
            <b><h3>"MARIA MONTESSORI"</h3></b>
        </td>
    </tr>        
    <tr>
        <td colspan="7" style="text-align:center">
            FLORIDA NORTE COOP UNIDOS SOMOS MAS MZ 385 SI 22
        </td>
    </tr>
    
    <tr>
        <td colspan="7" style="text-align:center">
            LISTADO TOTAL DE MOROSOS
        </td>
    </tr>
</table>

<table id="example1" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombre(s)</th>
            <th>Teléfono</th>
            <th>Estudiante</th>
            <th>Mes</th>
            <th>Deduda</th>
        </tr>
    </thead>
    <tbody>
        @foreach($adeudados as $key => $adeudado)
            <tr>
                <td>{{ $adeudado->estudiante->representante->cedula_f }}</td>
                <td>{{ $adeudado->estudiante->representante->nombres_re }}</td>
                <td>{{ $adeudado->estudiante->representante->telefono_re}}</td> 
                <td>{{ $adeudado->estudiante->apellidos.' '.$adeudado->estudiante->nombres }}</td> 
                <td>{{ $adeudado->fecha }}</td>
                @if($deuda[$key] != 0)
                    <td>{{ $deuda[$key] }}</td>
                @else
                    <td>{{ $adeudado->total_pago }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>  