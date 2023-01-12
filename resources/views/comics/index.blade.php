@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center m-3">Comics dashboard</h1>

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
                 <td><a class="btn btn-primary" href="{{route('comics.show', $comic)}}" title="show"><i class="fa-regular fa-eye"></i></a></td>
             </tr>

            @empty

            @endforelse
        </tbody>
      </table>


</div>



@endsection
