@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-primary"><a href="{{route('admin.projects.create')}}">Crea Progetto</a></button>
        <div class="row py-4">
            @foreach($projects as $project)
                <div class="col-4 p-2">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">
                            titolo:
                            <a href="{{ route('admin.projects.show', $project) }}">{{$project->title}}</a>
                          </h5>
                          <p class="card-text">img: {{$project->img}}</p>
                          <p class="card-text">descrizione: {{$project->description}}</p>
                        </div>
                        <div class="d-flex justify-content-between p-2">
                            <div>
                                <button class="btn btn-info text-light"><a href="{{route('admin.projects.edit', $project)}}">Modifica</a></button>
                            </div>
                            
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection