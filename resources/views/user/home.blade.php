@extends('user/layout/layout')

@section('page_title',"Thasin's Blogs")
@section('page_name',"Hi, there...")
@section('date',"You a Web developer, then this is the place for you")

@section('container')


@foreach($result as $list)
<!-- Post preview-->
<div class="post-preview">

    <a href="{{url('post/'.$list->id)}}">
        <h2 class="post-title">{{$list->title}}</h2>
        <img width="100%" src="{{asset('storage/post_images/'.$list->image)}}" alt="Error">
        <h3 class="post-subtitle">{{$list->short_desc}}</h3>
    </a>

    <p class="post-meta">
        Posted on {{$list->post_date}}
    </p>

</div>

<!-- Divider-->
<hr class="my-4" />
@endforeach

@endsection