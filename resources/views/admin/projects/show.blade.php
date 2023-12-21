@extends('layouts.app')

@section('content')
<button><a href="{{route('admin.projects.index')}}">Sezione Progetti</a></button>
    <div class="container">
        <div class="row row-gap-5">
            
            
                <div class="col-8">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$project->title}}</h5>

                          <p class="card-text">Bio: {{$project->description}}</p>
                          <p class="card-text">Defense: {{$project->img}}</p>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
@endsection