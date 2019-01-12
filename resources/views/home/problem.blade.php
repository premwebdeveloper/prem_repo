@extends('layouts.public_app')



@section('content')

<!--First Row-->

<section>

		<h2>Submit Your Problem</h2>

</section>

<div class="container">



	<div class="row">

		<div class="col-md-12">

			<div class="buffer_reduce">

				<div class="row ads mt30px">

					@if(session('status'))

						<div class="alert alert-success">{{ session('status') }}</div>

					@endif



					<div class="tab-content">

						<div class="tab-pane fade in active" id="hindi">

							<?= $problem->page_description; ?>

						</div>

					</div>



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

					        <input type="email" class="form-control" placeholder="Enter email" name="email">

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

	</div>

</div>



@endsection