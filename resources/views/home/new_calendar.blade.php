@extends('layouts.public_app')

@section('content')

<style>

	ol, li{

		margin-bottom:0px!important;

	    text-align: justify;

   		line-height: 2;

	}

	.mtmb30px{

		margin-top:30px!important;

		margin-bottom:30px!important;

	}

	.lh2px{

		line-height: 2;

	}

	.lowalpha{

	   	list-style-type: lower-alpha!important;

	}

	.lowrom

	{

	    list-style-type: lower-roman!important;

	}

</style>

<!--First Row-->

<section>

		<h2>New Calendar With Progress report  वार्षिक&nbsp; कैलेंडर&nbsp; एवं &nbsp;&nbsp;&nbsp;प्रगति&nbsp; रिपोर्ट</h2>

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

									<?= $new_calendar->page_description; ?>

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