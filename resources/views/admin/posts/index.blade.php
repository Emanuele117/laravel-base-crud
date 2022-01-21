@extends('layouts.app')

@section('content')

<div class="title">
    <h1>Di seguito tutti i post :</h1>

    <a href="{{ route('admin.posts.create')}}" role="button">create</a>
</div>

@if (session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif 

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Create at</th>
                <th>Update at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td scope="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->update_at }}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}">View </a> 
                    
                    <a href="{{route('admin.posts.edit', $post->id)}}">Edit </a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#delete{{$post->id}}">
                      Elimina
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$post->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Elimina il Post {{$post->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <p>Attenzione! Stai per cancellare definitivamente un post</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            Cancella
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection 