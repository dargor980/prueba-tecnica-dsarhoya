<table>
    <tr>
        <th rowspan="2" colspan="15" style="text-align: center;">Reporte de Valores del dólar del mes de {{$date}}</th>
    </tr>
    <tr></tr>
    <tr></tr>
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Valor</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        @foreach($row as $day)
            <tr>
                <td>{{ $day['Fecha']}}</td>
                <td>{{ $day['Valor'] }}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
