@extends('layout.main')

@section('content')

<div class="container">
    <h1 class="text-center m-3">Crea un fumetto</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
            value="{{old('title')}}"
            name="title" id="title" placeholder="Inserire il titolo">

            @error('title')
                <p  class="invalid-feedback">
                  {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">
                {{old('description')}}
            </textarea>

            @error('description')
                <p  class="invalid-feedback">
                  {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
            value="{{old('thumb')}}"
            placeholder="Inserire la URL dell'immagine">

            @error('thumb')
                <p  class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
            value="{{old('price')}}"
            placeholder="Inserire il prezzo(solo numeri)">

            @error('price')
                <p  class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series"
            value="{{old('series')}}"
            placeholder="Inserire la serie a cui appartiene il fumetto">

            @error('series')
                <p  class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date"
            value="{{old('sale_date')}}"
            placeholder="Inserisci data di uscita (YYYY-MM-DD)">

            @error('sale_date')
                <p  class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
            value="{{old('type')}}"
            placeholder="Inserire il tipo di fumetto">

            @error('type')
                <p  class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
        </div>



        <button type="submit" class="btn btn-info mb-5">Invia</button>

    </form>
</div>


@endsection
