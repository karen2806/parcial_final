@extends('layouts.plantilla')
@section('title','Index peliculas')
@section('content')
<br>
<br>
<br>
<br>
    <h1>Peliculas disponibles</h1>
    <section>
        @foreach ($movies as $movie)
          <article>
            <h3>{{ $movie->name }} </h3>
            <p> Descripción:
                <br>
                Año de publicación: {{ $movie->year }} 
                <br>
                Productor: {{ $movie->name_producer}} 
                <br>  
            </p>
            
            <a href="{{ route('movies.edit', $movie) }}" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; border-radius: 5px;">Editar</a>

            <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display: inline;">
              @method('DELETE')
              @csrf
              <button type="submit" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Borrar
              </button>
            </form>
            
            <a href="{{ route('movies.create') }}" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #008CBA; color: white; text-align: center; text-decoration: none; border-radius: 5px;">Agregar pelicula</a>
            

          </article>
        @endforeach
    </section>