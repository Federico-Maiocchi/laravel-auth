@extends('layouts.app')

@section('content')
    <div class="container">
        <button><a href="{{route('admin.projects.create')}}">Crea Progetto</a></button>
        <div class="row row-gap-5">
            @foreach($projects as $project)
                <div class="col-3">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">
                            
                            <a href="{{ route('admin.projects.show', $project) }}">{{$project->title}}</a>
                          </h5>

                          <p class="card-text">img: {{$project->img}}</p>
                          <p class="card-text">Defense: {{$project->description}}</p>
                        </div>
                        {{-- <button><a href="{{route('characters.edit', $character)}}">EDIT</a></button>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">delete</button>

                        </form> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection