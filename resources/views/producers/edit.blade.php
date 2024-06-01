@extends ('layouts.plantilla')
@section ('title', 'Editar Productor')

@section('content')
    <div class="container">
        <h2>Formulario para editar Productores</h2>

        <form action="{{route('producers.update', $producer)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{old('name', $producer->name)}}">
            </div>
            
            
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_name" value="{{old('last_name', $producer->last_name)}}">
            </div>
            
            
            <div class="mb-3">
                <label for="nacionality" class="form-label">Nacionalidad</label>
                <input type="text"  class="form-control" id="nacionality" name="nacionality" aria-describedby="nacionality" value="{{old('nacionality', $producer->nacionality)}}">
            </div>
        

            
            <button type="submit" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Editar</button>
        </form>

    </div>
@endsection