@extends('layouts.public_app')

@section('content')
<style>
	button.accordion {
	    background-color: #eee;
	    color: #444;
	    cursor: pointer;
	    padding: 18px;
	    width: 100%;
	    border: none;
	    text-align: left;
	    outline: none;
	    font-size: 15px;
	    transition: 0.4s;
	}

	button.accordion.active, button.accordion:hover {
	    background-color: #ccc;
	}

	div.panel {
	    padding: 0 0px;
	    background-color: white;
	    max-height: 0;
	    overflow: hidden;
	    transition: max-height 0.2s ease-out;
	    margin-bottom:0px;
	}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-default">
                <div class="wrapper wrapper-content mt30px">
    <div class="row animated fadeInRight">
        <div class="col-md-4">
            <div class="ibox float-e-margins">
            
                <div>
                    
					<div class="col-md-4">
                    	<img alt="image" class="img-circle img-responsive" src="resources/assets/img/a1.jpg">
                    	<a href="javascript:;" class="btn btn-info btn-xs" style="margin-top:5px">update image</a>
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

    	    <div class="with-nav-tabs">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile Information</a></li>
                            <li><a href="#family" data-toggle="tab">Family Information</a></li>
                            <li><a href="#jobportal" data-toggle="tab">Job Portal</a></li>
                       </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="profile">
                        	<form class="form-inline" action="">
							   		<div class="col-md-6 mb10px">
							    		<h4>Personal Information</h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="First Name" name="fname">
									    </div>
								    </div>
								    <div class="col-md-6 mb10px">
								    	<h4>&nbsp;</h4>
									    <div class="form-group">
									      <input type="text" class="form-control" placeholder="Last Name" name="lname">
									    </div>
								    </div>
							   		<div class="col-md-12 mb10px">
								    	<h4>Your Gender</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="male" checked="checked">
									      	&nbsp;&nbsp;Male
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="male">
									      	&nbsp;&nbsp;Female
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Email Address</h4>
								    	<div class="form-group">
									      <input type="email" class="form-control" placeholder="Example@gmail.com" name="email">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Mobile Number</h4>
								    	<div class="form-group">
									      <input type="tel" class="form-control" placeholder="+91-123456789" name="mobile">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>DOB</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="20-12-1990" name="bloodgroup">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Blood Group</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="AB+" name="bloodgroup">
									    </div>
								    </div>
									
									<div class="col-md-6 mb10px">					   
										<h4>Address</h4>
								    	<div class="form-group">
						      	<textarea class="form-control" rows="5" placeholder="Address" name="suggestion"></textarea>
									    </div>
								    </div>

									<div class="col-md-6 mb10px">
								    	<h4>Pin Code</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="333516" name="pin">
									    </div>
								    </div>

							    	<div class="col-md-6 mb10px">
								    	<h4>District</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="Jaipur" name="dis">
									    </div>	
								    </div>	

									<div class="col-md-6 mb10px">
									    <h4>State</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="Rajasthan" name="state">
									    </div>
								    </div>

									<div class="col-md-6 mb10px">
									    <h4>Country</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="India" name="country">
									    </div>
								    </div>
							    
							    	<div class="col-md-6 mb10px">
							    		<h4>जाति </h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="जाति" name="caste">
									    </div>
								    </div>
								    
								    <div class="col-md-6 mb10px">
								    	<h4>उपजाति </h4>
									    <div class="form-group">
									      <input type="text" class="form-control" placeholder="उपजाति" name="lname">
									    </div>
								    </div>
								    
							    	<div class="col-md-6 mb10px">
							    		<h4>घटक </h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="घटक" name="caste">
									    </div>
								    </div>

								    <div class="col-md-6 mb10px">
								    	<h4>उपघटक </h4>
									    <div class="form-group">
									      <input type="text" class="form-control " placeholder="उपघटक" name="lname">
									    </div>
								    </div>		
								    						    
							    	<div class="col-md-6 mb10px">
							    		<h4>गौत्र </h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="गौत्र" name="caste">
									    </div>
								    </div>

								    <div class="col-md-6 mb10px">
								    	<h4>उपगौत्र </h4>
									    <div class="form-group">
									      <input type="text" class="form-control" placeholder="उपगौत्र" name="lname">
									    </div>
								    </div>
									<div class="col-md-12 mb10px">
							    	<h4>मरने पर अंग दान करना चाहेंगे</h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="ang" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="ang">
								      	&nbsp;&nbsp;No
								    </div>

							    	<h4>आप को उपभोक्ता फॉर्म का सदस्य बना दिया जाये </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="up" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="up">
								      	&nbsp;&nbsp;No
							    	</div>

							    	<h4>May I Help You Club का सदस्य बनना चाहते है </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="hclub" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="hclub">
								      	&nbsp;&nbsp;No
							    	</div>

							    	<h4>ABC Club का सदस्य बनना चाहते है </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="aclub" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="aclub">
								      	&nbsp;&nbsp;No
							    	</div>

							    	<h4>किसी प्रोजेक्ट समिति का सदस्य बनना चाहते है </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="project" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="project">
								      	&nbsp;&nbsp;No
							    	</div>

							    	<h4>जरुरत में Blood Donate करने की सुचना चाहोगे </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="blood" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="blood">
								      	&nbsp;&nbsp;No
							    	</div>
							    	
							    	<h4>वैश्य पंचायत वैश्य वाहिनी का सदस्य बनना चाहोगे </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="panch" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="panch">
								      	&nbsp;&nbsp;No
							    	</div>

							    	<h4>वार्षिक कैलेंडर पहुंच गया </h4>
								    <div class="form-group ml0px">
								      	<input type="radio" placeholder="First Name" name="cal" checked="checked">
								      	&nbsp;&nbsp;Yes
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" placeholder="Last Name" name="cal">
								      	&nbsp;&nbsp;No
							    	</div>
							    </div>
							</form>
                        </div>

                        <div class="tab-pane fade" id="family">
                        	
							<a class="btn btn-info mb10px" id="addmember">
								<i class="fa fa-plus" aria-hidden="true"></i> Add Member
							</a>
							<form class="form-inline" action="">
						   		<div class="col-md-12 mb10px member" style="display:none;">
							    	<div class="form-group ml0px">
								      	<input type="radio" id="Male" name="male" checked="checked">
								      	&nbsp;&nbsp;Male
							   			&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" id="Female" name="male">
								      	&nbsp;&nbsp;Female
								      	&nbsp;&nbsp;&nbsp;&nbsp;
								      	<input type="radio" id="Child" name="male">
								      	&nbsp;&nbsp;Child
								    </div>
							    </div>
							</form>
							<!--MaleMemberForm  -->
							<div id="MaleMember" style="display:none;">
								<form class="form-inline" action="">
							   		<div class="col-md-6 mb10px">
							    		<h4>Personal Information</h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="First Name" name="fname">
									    </div>
								    </div>
								    <div class="col-md-6 mb10px">
								    	<h4>&nbsp;</h4>
									    <div class="form-group">
									      <input type="text" class="form-control" placeholder="Last Name" name="lname">
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Your Gender</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="male" checked="checked">
									      	&nbsp;&nbsp;Male
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="male">
									      	&nbsp;&nbsp;Female
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Photo</h4>
								    	<div class="form-group">
									      <input type="file" class="form-control" name="email">
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Email Address</h4>
								    	<div class="form-group">
									      <input type="email" class="form-control" placeholder="Example@gmail.com" name="email">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Mobile Number</h4>
								    	<div class="form-group">
									      <input type="tel" class="form-control" placeholder="+91-123456789" name="mobile">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>DOB</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="20-12-1990" name="bloodgroup">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Blood Group</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="AB+" name="bloodgroup">
									    </div>
								    </div>
									
							   		<div class="col-md-6 mb10px">
								    	<h4>मांगलिक</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="mang">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="mang" checked="checked">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

							   		<div class="col-md-6 mb10px">
								    	<h4>Married</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="married" checked="checked">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="married">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

							    	<div class="col-md-6 mb10px">
								    	<h4>विवाह की तिथि </h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="विवाह की तिथि " name="vivah">
									    </div>	
								    </div>	

									<div class="col-md-6 mb10px">
									    <h4>Any Exeprience</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="Any Experience" name="country">
									    </div>
								    </div>

							   		<div class="col-md-6 mb10px">
								    	<h4>P.H.दिव्यांगता </h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="ph">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="ph" checked="checked">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

									<div class="col-md-6 mb10px">
								    	<h4>Job/Business</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="job">
									      	&nbsp;&nbsp;Job
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="job" checked="checked">
									      	&nbsp;&nbsp;Businesss
									    </div>
								    </div>
								</form>
							</div>
							<!--FemaleMemberForm  -->
							<div id="FemaleMember" style="display:none;">
								<form class="form-inline" action="">
							   		<div class="col-md-6 mb10px">
							    		<h4>Personal Information</h4>
								    	<div class="form-group">
									      	<input type="text" class="form-control" placeholder="First Name" name="fname">
									    </div>
								    </div>
								    <div class="col-md-6 mb10px">
								    	<h4>&nbsp;</h4>
									    <div class="form-group">
									      <input type="text" class="form-control" placeholder="Last Name" name="lname">
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Your Gender</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" name="fema">
									      	&nbsp;&nbsp;Male
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" name="fema" checked="checked">
									      	&nbsp;&nbsp;Female
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Photo</h4>
								    	<div class="form-group">
									      <input type="file" class="form-control" name="email">
									    </div>
								    </div>
							   		<div class="col-md-6 mb10px">
								    	<h4>Email Address</h4>
								    	<div class="form-group">
									      <input type="email" class="form-control" placeholder="Example@gmail.com" name="email">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Mobile Number</h4>
								    	<div class="form-group">
									      <input type="tel" class="form-control" placeholder="+91-123456789" name="mobile">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>DOB</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="20-12-1990" name="bloodgroup">
									    </div>
								    </div>
									<div class="col-md-6 mb10px">
								    	<h4>Blood Group</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="AB+" name="bloodgroup">
									    </div>
								    </div>
									
							   		<div class="col-md-6 mb10px">
								    	<h4>मांगलिक</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="mang">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="mang" checked="checked">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

							   		<div class="col-md-6 mb10px">
								    	<h4>Married</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="married" checked="checked">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="married">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

							    	<div class="col-md-6 mb10px">
								    	<h4>विवाह की तिथि </h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="विवाह की तिथि " name="vivah">
									    </div>	
								    </div>	

									<div class="col-md-6 mb10px">
									    <h4>Any Exeprience</h4>
								    	<div class="form-group">
									      <input type="text" class="form-control" placeholder="Any Experience" name="country">
									    </div>
								    </div>

							   		<div class="col-md-6 mb10px">
								    	<h4>P.H.दिव्यांगता </h4>
									    <div class="form-group ml0px">
									      	<input type="radio" placeholder="First Name" name="ph">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" placeholder="Last Name" name="ph" checked="checked">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>

									<div class="col-md-6 mb10px">
								    	<h4>House Wife</h4>
									    <div class="form-group ml0px">
									      	<input type="radio" name="house" checked="checked">
									      	&nbsp;&nbsp;Yes
								   			&nbsp;&nbsp;&nbsp;&nbsp;
									      	<input type="radio" name="house">
									      	&nbsp;&nbsp;No
									    </div>
								    </div>
								</form>
							</div>
                        </div>
                        <div class="tab-pane fade" id="jobportal">Default 3</div>
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
