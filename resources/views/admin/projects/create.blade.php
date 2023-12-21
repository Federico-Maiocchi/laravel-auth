@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('admin.projects.store' ) }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="titolo" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Bio</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="descrizione" >{{ old('description') }} </textarea>

      </div>
      <div class="mb-3">
        <label for="img" class="form-label">Bio</label>
        <textarea class="form-control" name="img" id="img" rows="3" placeholder="immagine" >{{ old('img') }} </textarea>

      </div>
      
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
      </div>

    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
</section>

@endsection