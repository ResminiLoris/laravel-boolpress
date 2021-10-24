@extends('layouts/app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('admin.posts.store')}}">
            @csrf
            {{-- titolo --}}
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            {{-- contenuto --}}
            <div class="mb-3">
              <label for="content" class="form-label">Testo</label>
              <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            {{-- immagine --}}
            <div class="mb-3">
                <label for="image" class="form-label">Inserisci un link ad un immagine</label>
                <input type="text" class="form-control" id="image" name="image">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection