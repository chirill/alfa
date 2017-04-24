@extends('layouts.admin');


@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>

                <th>Titlu</th>
                <th>Body</th>
                <th>Creat</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>

                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo ? $post->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                <td>{{$post->category? $post->category->name : 'no catgory'}}</td>

                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop
