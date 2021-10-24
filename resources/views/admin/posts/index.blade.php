@extends('layouts.app')
@section('content')
<div class="container">
    <h1>i miei post</h1>
    <div><a href="{{route('admin.posts.create')}}" class="btn btn-success mb-3 mt-3">crea nuovo post</a></div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Scritto il</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
                <td><strong>{{$post->title}}</strong></td>
                <td>{{$post->getFormattedDate('created_at')}}</td>
                <td><a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">leggi di più</a></td>
                <td>
                  <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                  </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="text-center">non ci sono contenuti da visualizzare</td></tr>
            @endforelse
        </tbody>
      </table>
</div>
@endsection