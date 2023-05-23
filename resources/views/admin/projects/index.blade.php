@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td class="d-flex">
                  <a class="btn btn-primary me-3" href="{{route('admin.projects.show', ['project' => $project->slug])}}">Dettagli</a>
                  <a class="btn btn-secondary me-3" href="{{route('admin.projects.edit', ['project' => $project->slug])}}">Modifica</a>
                  <form action="{{route('admin.projects.destroy', ['project' => $project->slug])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <!--onclick="return confirm('Are you sure?')"-->
                      <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger delete">Elimina</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>      
  </table>
  <a href="{{route('admin.projects.create')}}" class="btn btn-secondary">Aggiungi Progetto</a>

@endsection
