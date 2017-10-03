@extends('layouts.public_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-4">
            <div class="ibox float-e-margins">
            
                <div>
                    
					<div class="col-md-4">
                    	<img alt="image" class="img-circle img-responsive" src="resources/assets/img/a1.jpg">
                	</div>
                    <div class="col-md-8">
	                    <div class="ibox-content profile-content">
	                        <h4><strong>Monica Smith</strong></h4>
	                        <p><i class="fa fa-envelope"></i> demo@gmail.com</p>
	                        <p><i class="fa fa-phone"></i> +91-1234567890</p>

						</div>
                    </div>
                    <div class="col-md-12">
                		<h5> Profile </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                        </p>
                        
                    </div>
            </div>
        </div>
    </div>
        <div class="col-md-8">

    	    <div class="panel with-nav-tabs">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                       </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                    </div>
                </div>
            </div>
        </div>
			<br/>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
