@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crea un nuovo post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('admin.posts.store')}}" method="post">
         @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Scrivi il testo qui" aria-describedby="titleHelper" value="{{ old('title') }}" >
            <small id="titleHelper" class="text-muted">Scrivi un titolo per il tuo post.</small>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3">{{ old('title') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
</div>

@endsection