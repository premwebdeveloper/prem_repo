@extends('layouts.public_app')

@section('content')
<style>
	ol, li{
		margin-bottom:30px!important;
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
		<h2>About Us</h2>
</section>
<div class="container">

	<div class="row">
		<div class="col-md-9">
			<div class="buffer_reduce">
				<div class="row ads">
		    	    <div class="with-nav-tabs" id="member">
		                <div class="panel-heading">
	                        <ul class="nav nav-tabs">
	                            <li class="active"><a href="#hindi" data-toggle="tab">Hindi</a></li>
	                            <li><a href="#english" data-toggle="tab">English</a></li>
	                      </ul>
		                </div>
     	<div class="panel-body">
            <div class="tab-content">
			<div class="tab-pane fade" id="english">

			</div>

			<div class="tab-pane fade in active" id="hindi">
				<?= $about->page_description; ?>
			</div>

				</div>
				</div>
			</div>
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