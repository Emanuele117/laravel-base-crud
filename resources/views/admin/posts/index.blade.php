@extends('layouts.app')

@section('content')

<div class="title">
    <h1>Di seguito tutti i post :</h1>

    <a href="{{ route('admin.posts.create')}}" role="button">create</a>
</div>

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
                <td>view - edit - delete</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection 