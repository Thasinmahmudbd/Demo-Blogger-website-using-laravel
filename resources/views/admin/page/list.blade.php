@extends('admin/layout/layout')

@section('page_title','View Page')

@section('container')

<div class="page-title">

    <div class="title_left">

        <h3>All Pages</h3>
            
    </div>

</div>

<div class="clearfix"></div>

<div class="row">
            
    <div class="col-md-12 col-sm-12 ">
            
        <div class="x_panel">

                <div class="x_content">

                    <div class="row">

                        <div class="col-sm-12">
                            
                        @if(session('msg')=='Page Made.')

                            <div class="alert alert-success alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>

                        @elseif(session('msg')=='Page Removed.')
                            
                            <div class="alert alert-danger alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>

                        @elseif(session('msg')=='Page Customized.')
                            
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
                                            <th width="45%">Name</th>
                                            <th width="35%">Slug</th>
                                            <th width="18%">Action</th>
                                        </tr>

                                    </thead>


                                    <tbody>

                                        @foreach($result as $list)

                                        <tr>
                                            <td>{{$list->id}}</td>
                                            <td>{{$list->name}}</td>
                                            <td>{{$list->slug}}</td>
                                            <td>
                                            
                                                <a class="btn btn-warning color_white point" href="{{url('admin/page/edit/'.$list->id)}}">Edit</a>

                                                <a class="btn btn-danger color_white point" href="{{url('admin/page/delete/'.$list->id)}}">Delete</a>
                                            
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