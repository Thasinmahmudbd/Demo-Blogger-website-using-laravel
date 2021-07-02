@extends('admin/layout/layout')

@section('page_title','View Messages')

@section('container')

<div class="page-title">

    <div class="title_left">

        <h3>All Messages</h3>
            
    </div>

</div>

<div class="clearfix"></div>

<div class="row">
            
    <div class="col-md-12 col-sm-12 ">
            
        <div class="x_panel">

                <div class="x_content">

                    <div class="row">

                        <div class="col-sm-12">

                        @if(session('msg')=='Message Removed.')
 
                            <div class="alert alert-danger alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>{{session('msg')}}</strong>
                            </div>
                        
                        @endif

                            <div class="card-box table-responsive">
                    
                                <table id="" class="table table-striped table-bordered" style="width:100%">

                                    <thead>

                                        <tr>
                                            <th width="2%">S.No</th>
                                            <th width="10%">Name</th>
                                            <th width="10%">Email</th>
                                            <th width="10%">Mobile</th>
                                            <th width="48%">Message</th>
                                            <th width="10%">Added On</th>
                                            <th width="10%">Action</th>
                                        </tr>

                                    </thead>


                                    <tbody>

                                        @foreach($result as $list)

                                        <tr>
                                            <td>{{$list->id}}</td>
                                            <td>{{$list->name}}</td>
                                            <td>{{$list->email}}</td>
                                            <td>{{$list->mobile}}</td>
                                            <td>{{$list->message}}</td>
                                            <td>{{$list->added_on}}</td>
                                            <td>

                                                <a class="btn btn-danger color_white point" href="{{url('admin/contact/delete/'.$list->id)}}">Delete</a>
                                            
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