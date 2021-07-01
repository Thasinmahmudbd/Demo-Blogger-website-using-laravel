@extends('admin/layout/layout')

@section('page_title','View Post')

@section('container')

<div class="page-title">

    <div class="title_left">

        <h3>All Posts</h3>
            
    </div>

</div>

<div class="clearfix"></div>

<div class="row">
            
    <div class="col-md-12 col-sm-12 ">
            
        <div class="x_panel">

                <div class="x_content">

                    <div class="row">

                        <div class="col-sm-12">
                            
                        @if(session('msg')=='Post Uploaded.')

                            <div class="alert alert-success alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>

                        @elseif(session('msg')=='Post Deleted.')
                            
                            <div class="alert alert-danger alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>

                        @elseif(session('msg')=='Post Updated.')
                            
                            <div class="alert alert-warning alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>
                        
                        @endif

                            <div class="card-box table-responsive">
                    
                                <table id="" class="table table-striped table-bordered" style="width:100%">

                                    <thead>

                                        <tr>
                                            <th width="2%">S.No</th>
                                            <th width="20%">Title</th>
                                            <th width="40%">Highlights</th>
                                            <th width="15%">Picture</th>
                                            <th width="8%">Date</th>
                                            <th width="15%">Action</th>
                                        </tr>

                                    </thead>


                                    <tbody>

                                        @foreach($result as $list)

                                        <tr>
                                            <td>{{$list->id}}</td>
                                            <td>{{$list->title}}</td>
                                            <td>{{$list->short_desc}}</td>
                                            <td><img width="100%" src="{{asset('storage/post_images/'.$list->image)}}" alt="Error"></td>
                                            <td>{{$list->post_date}}</td>
                                            <td>
                                            
                                                <a class="btn btn-warning color_white point" href="{{url('admin/post/edit/'.$list->id)}}">Edit</a>

                                                <a class="btn btn-danger color_white point" href="{{url('admin/post/delete/'.$list->id)}}">Delete</a>
                                            
                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>
                
            
		</div>

    </div>
    
</div>

@endsection