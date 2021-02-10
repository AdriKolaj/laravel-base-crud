<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beers - Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
      <main class="container">
        <h1 class="mt-5">Le nostre birre</h1>
        
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
                <td>{{ $beer->gradazione }}</td>
                <td>{{ $beer->cl }}</td>
                <td>{{ $beer->prezzo }}</td>
                <td>{{ $beer->created_at }}</td>
                <td>{{ $beer->updated_at }}</td>
                <td>
                  <a href="{{ route("beers.show", ['beer' =>$beer->id]) }}" class="btn btn-outline-light">MOSTRA</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </main>

    </body>
</html>
