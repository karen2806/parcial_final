@extends ('layouts.plantilla')
@section ('title', 'Agregar Pelicula')

@section('content')
    <div class="container">
        <h2>Formulario para agregar Peliculas</h2>

        <form action="{{route('movies.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            
            
            <div class="mb-3">
                <label for="gender" class="form-label">Género</label>
                <input type="text" class="form-control" id="gender" name="gender" aria-describedby="gender">
            </div>
            
            
            <div class="mb-3">
                <label for="year" class="form-label">Año de lanzamiento</label>
                <input type="number" min="0" class="form-control" id="year" name="year" aria-describedby="year">
            </div>
            
            
            <div class="mb-3">
                <label for="name_producer" class="form-label">Nombre del productor</label>
                <input type="text"  class="form-control" id="name_producer" name="name_producer" aria-describedby="name_producer">
            </div>
            

            
            <button type="submit" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Crear</button>

            
        </form>

    </div>
@endsection