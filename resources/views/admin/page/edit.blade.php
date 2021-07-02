@extends('admin/layout/layout')

@section('page_title','Edit Page')

@section('container')

<div class="page-title">

	<div class="title_left">

		<h3>Add New</h3>

    </div>

</div>

<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 ">

        <div class="x_panel">

			<div class="x_content">

			    <br />

                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('/admin/page/update/'.$result['0']->id)}}" enctype="multipart/form-data">
				@csrf





					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
						</label>

                    <div class="col-md-6 col-sm-6 ">

						<input type="text" id="name" class="form-control " name="name" value="{{$result['0']->name}}">
						@error('name')
						<span class="field_error">{{$message}}</span>
						@enderror

					</div>
					</div>






                    <div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
						</label>

                    <div class="col-md-6 col-sm-6 ">

						<input type="text" id="slug" class="form-control " name="slug" value="{{$result['0']->slug}}">
						@error('slug')
						<span class="field_error">{{$message}}</span>
						@enderror

					</div>
					</div>






                    <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
                        </label>

                    <div class="col-md-6 col-sm-6 ">

                        <textarea type="text" id="description"  class="form-control " name="description" >{{$result['0']->description}}</textarea>
						@error('description')
						<span class="field_error">{{$message}}</span>
						@enderror

                    </div>
                    </div>








					<div class="ln_solid"></div>

					    <div class="item form-group">

							<div class="col-md-6 col-sm-6 offset-md-3">

                                <!--<button class="btn btn-primary" type="button">Cancel</button>

								<button class="btn btn-primary" type="reset">Reset</button>-->

								<button type="submit" class="btn btn-warning color_white">Update</button>

                            </div>

                        </div>

				</form>

			</div>

        </div>

    </div>

</div>

@endsection