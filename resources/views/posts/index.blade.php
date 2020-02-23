
@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="list-group-item list-group-item-info">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{-- to make the page numbers appear at the bottom of the screen --}}
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection