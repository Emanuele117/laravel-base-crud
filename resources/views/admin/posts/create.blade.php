@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crea un nuovo post</h1>

    <form action="{{route('admin.posts.store')}}" method="post">
         @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Scrivi il testo qui" aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Scrivi un titolo per il tuo post.</small>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salva</button>

    </form>
</div>

@endsection