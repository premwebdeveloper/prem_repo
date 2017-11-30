@extends('layouts.public_app')

@section('content')
<!--First Row-->
<section>
		<h2>Submit Your Problem</h2>
</section>
<div class="container">

	<div class="row">
		<div class="col-md-9">
			<div class="buffer_reduce">
				<div class="row ads mt30px">
					@if(session('status'))
						<div class="alert alert-success">{{ session('status') }}</div>
					@endif

			  		<form id="form" method="post" action="{{ route('addProblem') }}" class="wizard-big">

						{{ csrf_field() }}

					    <div class="form-group">
					      <label class="control-label col-md-2" for="email">Name:</label>
					      <div class="col-md-8">
					        <input type="text" class="form-control" placeholder="Enter name" name="name" required="required">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-md-2" for="email">Email:</label>
					      <div class="col-md-8">
					        <input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-md-2" for="email">Mobile No.:</label>
					      <div class="col-md-8">
					        <input type="tel" class="form-control" placeholder="Enter mobile no." name="mobile" required="required">
					      </div>
					    </div>
					    <div class="form-group">
					      	<label class="control-label col-md-2" for="email">Problem:</label>
					      	<div class="col-md-8">
					       	 	<textarea class="form-control" rows="5" cols="10" placeholder="Problem" name="problem" required="required"></textarea>
				     	 	</div>
					    </div>
					  	<div class="form-group">
					      <div class="col-md-offset-2 col-md-8">
					        <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
					    </div>
				  	</form>
				</div>
			</div>
		</div>

		<!-- special section -->
		<div class="col-md-3">
			<h2 class="section_head"><span>विज्ञापन</span></h2>
			<div class="row row-grid">
			<div class="col-md-12 col-sm-12">
				<div class="sidebarnews mainnews">
					<a href="javascript:;" title="Henry D’Silva’s Konkani Film ‘Nashibaso Khel’ breaks new ground">
						<div class="author_nameinner">
							<img width="19" height="16" src="resources/frontend_assets/images/comment.png" alt="comment" class="comment_tag floatright"><a href="javascript:;" title="" class="comment_here"></a></span>
						</div>
					</a>
					<a href="javascript:;" title="">
						<img src="resources/frontend_assets/uploads/features/Nashinbasho_newsk_87744503.jpg" width="360px" height="" class="img-responsive" alt="">
					</a>
				<h3 class="special"><a href="javascript:;" title="Henry D’Silva’s Konkani Film ‘Nashibaso Khel’ breaks new ground"> Henry D’Silva’s Konkani Film ‘Nashibaso Khel’ breaks new ground </a></h3>
			  </div>

			</div>
			<!-- ads end -->
			</div>
		</div>
	</div>
</div>

@endsection