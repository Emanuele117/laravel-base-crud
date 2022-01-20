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

                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection 