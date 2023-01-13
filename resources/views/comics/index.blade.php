@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center m-3">Comics dashboard</h1>
    <a class="btn btn-info mb-5" href="{{route('comics.create')}}">Crea nuovo fumetto</a>

    @if (session('deleted'))
        <div>
            <div class="alert alert-success" role="alert">
                {{session('deleted')}}
            </div>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
             <tr>
                 <td>{{$comic->id}}</td>
                 <td>{{$comic->title}}</td>
                 <td>&euro; {{$comic->price}}</td>
                 <td>
                  <a class="btn btn-primary" href="{{route('comics.show', $comic)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                  <a class="btn btn-warning " href="{{route('comics.edit', $comic)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
                  <form class="d-inline"
                  onsubmit="return confirm('Confermi l\'eliminazione di: {{$comic->title}}')"
                  action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger " title="delete"><i class="fa-solid fa-trash"></i></button>
                  </form>

                </td>
             </tr>

            @empty
              <h1>Nessun fumetto trovato</h1>

            @endforelse
        </tbody>
      </table>


</div>

@endsection
