@extends('layouts.plantilla')
@section('title','Index Productores')
@section('content')
<br>
<br>

    <h1>Conoce algunos de nuestros productores</h1>
    <p> "Todos nuestros sueños pueden hacerse realidad si tenemos el coraje de perseguirlos."
    </p>
    <h3>-Walt Disney</h3>
    <section>
        @foreach ($producer as $producer)
          <article>
            <h3>{{ $producer->name }} {{ $producer->last_name }}  </h3>
            <p> Descripción:
                <br>
                Nacionalidad: {{ $producer->nacionality }} 
                <br> 
            </p>
            
            <a href="{{ route('producers.edit', $producer) }}" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; border-radius: 5px;">Editar</a>

            <form action="{{ route('producers.destroy', $producer) }}" method="POST" style="display: inline;">
              @method('DELETE')
              @csrf
              <button type="submit" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Borrar
              </button>
            </form>
            
            <a href="{{ route('producers.create') }}" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #008CBA; color: white; text-align: center; text-decoration: none; border-radius: 5px;">Agregar productor</a>
            

          </article>
        @endforeach
    </section>