@extends('layouts.public_app')

@section('content')
<!--First Row-->
<section>
		<h2>Aims & Objectivies</h2>
</section>
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="buffer_reduce">
				<div class="row ads">
		    	    <div class="with-nav-tabs" id="member">
				     	<div class="panel-body">
				            <div class="tab-content">
								<div class="tab-pane fade in active" id="hindi">
									<?= $aims->page_description; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection