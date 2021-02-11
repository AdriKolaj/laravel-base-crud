
@extends('layouts.main')

@section('header')
  <h1 class="mt-5">Le nostre birre</h1>
@endsection

@section('content')

  <table class="table table-dark table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Nome</th>
        <th>Gradazione</th>
        <th>Formato (cl)</th>
        <th>Prezzo (&euro;)</th>
        <th>Creato il</th>
        <th>Aggiornato il</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beers as $beer)
      <tr>
        <td>{{ $beer->id }}</td>
        <td>{{ $beer->marca }}</td>
        <td>{{ $beer->nome }}</td>
        <td>{{ number_format($beer->gradazione, 1) }}</td>
        <td>{{ $beer->cl }}</td>
        <td>{{ number_format($beer->prezzo, 2) }}</td>
        <td>{{ $beer->created_at }}</td>
        <td>{{ $beer->updated_at }}</td>
        <td>
          <a href="{{ route("beers.show", ['beer' =>$beer->id]) }}" class="btn btn-outline-light">MOSTRA</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection

@section('footer')
  <div class="text-right">
    <a href="{{ route("beers.create") }}" class="btn btn-lg btn-success">Crea un nuovo libro</a>  
  </div>    
@endsection