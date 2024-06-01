@extends ('layouts.plantilla')
@section ('title', 'Agregar Productores')

@section('content')
    <div class="container">
        <h2>Formulario para agregar Productores</h2>

        <form action="{{route('producers.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            
            
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_name">
            </div>
            
            
            <div class="mb-3">
                <label for="nacionality" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionality" name="nacionality" aria-describedby="nacionality">
            </div>

            
            <button type="submit" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Crear</button>

            
        </form>

    </div>
@endsection