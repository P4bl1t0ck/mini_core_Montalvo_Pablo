<x-showing>

<h1>Resultados</h1>

<table>

    <tr>
        <th>Repartidor</th>
        <th>Cantidad envíos</th>
        <th>Total Kg</th>
        <th>Costo Total</th>
    </tr>

    @foreach($resultados as $resultado)

        <tr>

            <td>
                {{$resultado['nombre']}}
            </td>

            <td>
                {{$resultado['cantidad_envios']}}
            </td>

            <td>
                {{$resultado['total_kg']}}
            </td>

            <td>
                ${{$resultado['costo_total']}}
            </td>

        </tr>

    @endforeach

</table>

</x-showing>