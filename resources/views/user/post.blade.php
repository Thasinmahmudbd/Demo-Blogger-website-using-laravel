@extends('user/layout/layout')

@section('page_title',$result[0]->title)
@section('page_name',$result[0]->title)
@section('date',$result[0]->post_date)

@section('container')

<!-- Post Content-->
<article class="mb-4">

    <div class="container px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-12">

                <p>{{$result[0]->short_desc}}</p>

                <img width="100%" src="{{asset('storage/post_images/'.$result[0]->image)}}" alt="Error">

                <h2 class="section-heading">Full Article</h2>

                <p>{{$result[0]->long_desc}}</p>

            </div>

        </div>

    </div>

</article>



@endsection