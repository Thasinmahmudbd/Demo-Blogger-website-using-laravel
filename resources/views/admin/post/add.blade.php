@extends('admin/layout/layout')

@section('page_title','Manage Post')

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

                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">





					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
						</label>

                    <div class="col-md-6 col-sm-6 ">

						<input type="text" id="title" required="required" class="form-control " name="Title" >

					</div>
					</div>






                    <div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="highlights">Highlights <span class="required">*</span>
						</label>

                    <div class="col-md-6 col-sm-6 ">

						<textarea type="text" id="highlights" required="required" class="form-control " name="Short_description" ></textarea>

					</div>
					</div>






                    <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="blog">Blog <span class="required">*</span>
                        </label>

                    <div class="col-md-6 col-sm-6 ">

                        <textarea type="text" id="blog" required="required" class="form-control " name="long_description" ></textarea>

                    </div>
                    </div>








                    <div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="customFile">Photo
						</label>

                    <div class="col-md-6 col-sm-6">

						<input type="file" name="Photo" class="form-control" id="customFile">

					</div>
					</div>







					<div class="ln_solid"></div>

					    <div class="item form-group">

							<div class="col-md-6 col-sm-6 offset-md-3">

                                <!--<button class="btn btn-primary" type="button">Cancel</button>

								<button class="btn btn-primary" type="reset">Reset</button>-->

								<button type="submit" class="btn btn-success">Submit</button>

                            </div>

                        </div>

				</form>

			</div>

        </div>

    </div>

</div>

@endsection