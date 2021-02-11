@extends('layouts.main')

@section('header')
  <h1 class="mt-5">Crea una nuova birra</h1>    
@endsection

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route("beers.store") }}" method="POST">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="gradazione">Gradazione Alcolica</label>
        <input type="text" class="form-control" name="gradazione" id="gradazione" placeholder="Gradazione Alcolica">
      </div>
      <div class="form-group">
        <label for="cl">Formato in cl</label>
        <input type="text" class="form-control" name="cl" id="cl" placeholder="Formato in cl">
      </div>
      <div class="form-group">
        <label for="prezzo">Prezzo</label>
        <input type="text" class="form-control" name="prezzo" id="prezzo" placeholder="Prezzo">
      </div>

       <button type="submit" class="btn btn-success">Salva</button>
       <a href="{{ route('beers.index') }}" class="btn btn-secondary">Indietro</a>
    </form>
@endsection