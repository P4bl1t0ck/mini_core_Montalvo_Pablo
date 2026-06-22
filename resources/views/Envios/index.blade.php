<x-calc>

    <h1>Calcular costo de envíos</h1>

    <form action="/calcular" method="POST">

        @csrf

        <div>
            <label>Fecha Inicio</label>
            <input
                type="date"
                name="fecha_inicio"
                required>
        </div>

        <br>

        <div>
            <label>Fecha Fin</label>
            <input
                type="date"
                name="fecha_fin"
                required>
        </div>

        <br>

        <button type="submit">
            Calcular
        </button>

    </form>

</x-calc>