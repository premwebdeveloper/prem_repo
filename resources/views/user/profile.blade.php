@extends('layouts.public_app')

@section('content')

<style type="text/css">
    .form-group {
        margin-bottom: 15px !important;
    }
    .amit .active{
        background: #b60c31;
    }     
    .amit li{
        background: #5bc0de;
    }     
    .amit li h3{
        color: #fff;
        margin-top: 10px;
    }    
    .amit .active h3{
        color: #fff;
        margin-top: 10px;
    }
    .mb20px{
        margin-bottom: 20px!important
    }    
    .mb30px{
        margin-bottom: 30px!important
    }
</style>

<script type="text/javascript">
	$(document).ready(function(){

		var page_url = window.location.href;

		var temp_param = page_url.split('#');
		var param = temp_param[1];

		if(param == 'family')
		{
			$('#head_member_tab').removeClass('active');
			$('#family_member_tab').addClass('active');
			$('#profile').removeClass('in active');
			$('#family').addClass('in active');
		}
        var val = "<?= $user->seva_nivrat;?>"; // retrieve the value
        if(val==1){
            $(".antimg_pad").show();
        }
        else{
            $(".antimg_pad").hide();
        }
	});
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">

                <div class="wrapper wrapper-content mt30px">
				    <div class="row animated fadeInRight">

				    	<!-- Profile update section start here-->
				        <div class="col-md-12">

				    	    <div class="with-nav-tabs">
				                <div class="panel-heading" style="padding: 10px 0px;">
			                	  	<ul class="nav nav-tabs amit">
									    <li class="active" id="head_member_tab">
									    	<a href="#profile" style="background: none;border: none;">
                                                <h3>मुखिया की सदस्यता हेतु Click करें </h3>
                                            </a>
									    </li>
									    <li id="family_member_tab">
									    	<a href="#family" style="background: none;border: none;">
                                                <h3>परिजनों को सदस्य बनाने हेतु Click करें</h3>
                                            </a>
									    </li>
									    <!-- <li><a href="#jobportal">Job Portal</a></li> -->
									</ul>
				              	</div>

				               	<!-- Add member success message -->
				                	@if(session('member_email_exist'))
										<div class="alert alert-success">{{ session('member_email_exist') }}</div>
									@endif

									<!-- If member email is already exist -->
				                	@if(session('add_member'))
										<div class="alert alert-success">{{ session('add_member') }}</div>
									@endif

				                    <div class="tab-content">
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
				                    	<!-- Presonal Information -->
				                        <div class="tab-pane fade in active" id="profile">
				                        	<!-- Update Personal Info -->

												<div class="row mb10px">
													<div class="col-md-12">
														<!-- personal_status -->
														@if(session('personal_status'))
														<div class="alert alert-success">{{ session('personal_status') }}</div>
														@endif

														<!-- religion_status -->
														@if(session('religion_status'))
														<div class="alert alert-success">{{ session('religion_status') }}</div>
														@endif

													 	<!-- Update member success message -->
									                	@if(session('update_member'))
															<div class="alert alert-success">{{ session('update_member') }}</div>
														@endif

													 	<!-- Delete member success message -->
									                	@if(session('delete_member'))
															<div class="alert alert-success">{{ session('delete_member') }}</div>
														@endif
													</div>
													<div class="col-md-10">
										    		<h2 class="red">Information About Family Head परिवार के मुखिया के बारे में जानकारी </h2>
										    			<hr>
										    		</div>

										    		<!-- <div class="col-md-2 text-right">
                                                        <h4>
                                                            <a href="javascript:;" id="edit_profile" class="edit_profile btn btn-info">Edit Profile</a>
                                                        </h4>
                                                    </div> -->
									    		</div>

									    	<form class="form-inline" action="{{ route('updatePersonalInfo') }}" method="post" enctype="multipart/form-data">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

									    		<div class="row">
											   		<div class="col-md-3">
											   			<h4>मुखिया का पूरा नाम</h4>

												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control personal_info" placeholder="Full Name" name="name" id="name" value="{{$user->name}}" required="required">
													    </div>

												    	<h4>Gender / लिंग </h4>
													    <div class="form-group ">
													    	@if($user->gender==2)
													    		<input type="radio" class="personal_info" name="gender" value="1">
												      			&nbsp;&nbsp;Male
												   				<input type="radio" class="personal_info" name="gender" value="2" checked="checked"> &nbsp;&nbsp;Female
													    	@else
													    		<input type="radio" class="personal_info" name="gender" value="1" checked="checked"> &nbsp;&nbsp;Male
												   				<input type="radio" class="personal_info" name="gender" value="2"> &nbsp;&nbsp;Female
												   			@endif
												   		 </div>
												    </div>

												    <div class="col-md-3">
												    	<h4>Father/Husband Name</h4>
													    <div class="form-group" style="margin-bottom: 30px;">
													      <input type="text" class="form-control personal_info" placeholder="Father / Husband Name" name="father_husband_name" id="father_husband_name" value="{{$user->father_husband_name}}">
													    </div>

		    									    	<h4>Whatsapp/Mobile No.</h4>
												    	<div class="form-group">
													      <input type="tel" class="form-control personal_info" placeholder="+91-123456789" name="whatsapp" id="whatsapp" value="{{$user->whatsapp_mobile}}">
													    </div>
												    </div>


												    <div class="col-md-3">
												    	<h4>Email Id</h4>
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="+91-123456789" name="email" id="email" value="{{$user->email}}" readonly>
													    </div>
                                                        <h4>Cast / जाति </h4>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control personal_info" placeholder="जाति" name="cast" id="cast" value="{{$user->cast}}">
                                                        </div>
												    </div>

                                                    <div class="col-md-3">
                                                        <img alt="image" class="img-responsive " src="resources/uploads/profile_images/{{$user->image}}" style="width: 120px;height: 88px;">
                                                        <p class="r">परिवार के मुखिया </p>
                                                        <div class="form-group">
                                                            <input type="file" name="image" class="form-control personal_info">
                                                        </div>
                                                    </div>

												    <!-- <div class="col-md-3">
                                                        <h4>Religion/धर्म</h4>
                                                        <div class="form-group">
                                                                                                              <input type="text" class="form-control" name="religion" id="religion" value="हिन्दू" disabled>
                                                                                                            </div>
                                                    </div> -->

													<!-- <div class="col-md-3">
                                                                                                            <h4>मत/सम्प्रदाय </h4>
                                                                                                            <div class="form-group">
                                                                                                                <select class="form-control personal_radio personal_info" required="" name="sampraday" id="sampraday">
                                                    
                                                                                                                    @if($user->sampraday)
                                                                    <option value="{{$user->sampraday}}" selected>{{$user->sampraday}}</option>
                                                                                                                    @endif
                                                    
                                                                                                                    <option value="">Select मत/सम्प्रदाय </option>
                                                                                                                    <option value="सनातनी">सनातनी</option>
                                                                                                                    <option value="जैन">जैन</option>
                                                                                                                    <option value="बौद्ध">बौद्ध</option>
                                                                                                                    <option value="आर्य">आर्य</option>
                                                                                                                    <option value="सिख">सिख</option>
                                                                                                                    <option value="राधास्वामी">राधास्वामी</option>
                                                                                                                    <option value="अन्य ">अन्य </option>
                                                                                                                </select>
                                                        </div>
                                                                                                        </div>
                                                     
											    	<div class="col-md-3">
											    		<h4>Cast / जाति </h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="जाति" name="cast" id="cast" value="{{$user->cast}}">
													    </div>
												    </div>


												    <div class="col-md-3">
                                                        <h4>Sub Cast/उपजाति/घटक</h4>
                                                                                                            <div class="form-group">
                                                                                                              <input type="text" class="form-control personal_info" placeholder="उपजाति" name="sub_cast" id="sub_cast" value="{{$user->sub_cast}}" readonly>
                                                                                                            </div>
                                                    </div> -->

											    	<div class="col-md-2">
											    		<h4>गौत्र (Gotre)</h4>
												    	<div class="form-group">
													      	<input type="text" class="form-control personal_info" placeholder="गौत्र" name="gotra" id="gotra" value="{{$user->gotra}}">
													    </div>
												    </div>

												    <!-- <div class="col-md-3">
                                                        <h4>बंक </h4>
                                                                                                            <div class="form-group">
                                                                                                              <input type="text" class="form-control personal_info" placeholder="बंक" name="bunk" id="bunk" value="{{$user->bunk}}" readonly>
                                                                                                            </div>
                                                    </div> -->

													<div class="col-md-2">
														<h4>मूल निवासी </h4>
												    	<div class="form-group">
										      			<textarea class="form-control personal_info" rows="1" placeholder="मूल निवासी(स्थान का नाम , जिला, राज्य दें) " name="origin_place" id="origin_place">{{$user->origin_place}}</textarea>
													    </div>
												    </div>

                                                    <div class="col-md-4">
                                                        <h4>Date of Birth</h4>
                                                        <div class="col-md-4" style="padding-left: 0px">
                                                            <div class="form-group">
                                                                <select class="form-control" name="date">
                                                                    <option value="">Date</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <select class="form-control" name="month">
                                                                    <option value="">Month</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="padding-right: 0px">
                                                            <div class="form-group">
                                                                <select class="form-control" name="birth-year">
                                                                    <option value="">Year</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">1999</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                    <option value="1989">1989</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1984">1984</option>
                                                                    <option value="1983">1983</option>
                                                                    <option value="1982">1982</option>
                                                                    <option value="1981">1981</option>
                                                                    <option value="1980">1980</option>
                                                                    <option value="1979">1979</option>
                                                                    <option value="1978">1978</option>
                                                                    <option value="1977">1977</option>
                                                                    <option value="1976">1976</option>
                                                                    <option value="1975">1975</option>
                                                                    <option value="1974">1974</option>
                                                                    <option value="1973">1973</option>
                                                                    <option value="1972">1972</option>
                                                                    <option value="1971">1971</option>
                                                                    <option value="1970">1970</option>
                                                                    <option value="1969">1969</option>
                                                                    <option value="1968">1968</option>
                                                                    <option value="1967">1967</option>
                                                                    <option value="1966">1966</option>
                                                                    <option value="1965">1965</option>
                                                                    <option value="1964">1964</option>
                                                                    <option value="1963">1963</option>
                                                                    <option value="1962">1962</option>
                                                                    <option value="1961">1961</option>
                                                                    <option value="1960">1960</option>
                                                                    <option value="1959">1959</option>
                                                                    <option value="1958">1958</option>
                                                                    <option value="1957">1957</option>
                                                                    <option value="1956">1956</option>
                                                                    <option value="1955">1955</option>
                                                                    <option value="1954">1954</option>
                                                                    <option value="1953">1953</option>
                                                                    <option value="1952">1952</option>
                                                                    <option value="1951">1951</option>
                                                                    <option value="1950">1950</option>
                                                                    <option value="1949">1949</option>
                                                                    <option value="1948">1948</option>
                                                                    <option value="1947">1947</option>
                                                                    <option value="1946">1946</option>
                                                                    <option value="1945">1945</option>
                                                                    <option value="1944">1944</option>
                                                                    <option value="1943">1943</option>
                                                                    <option value="1942">1942</option>
                                                                    <option value="1941">1941</option>
                                                                    <option value="1940">1940</option>
                                                                    <option value="1939">1939</option>
                                                                    <option value="1938">1938</option>
                                                                    <option value="1937">1937</option>
                                                                    <option value="1936">1936</option>
                                                                    <option value="1935">1935</option>
                                                                    <option value="1934">1934</option>
                                                                    <option value="1933">1933</option>
                                                                    <option value="1932">1932</option>
                                                                    <option value="1931">1931</option>
                                                                    <option value="1930">1930</option>
                                                                    <option value="1929">1929</option>
                                                                    <option value="1928">1928</option>
                                                                    <option value="1927">1927</option>
                                                                    <option value="1926">1926</option>
                                                                    <option value="1925">1925</option>
                                                                    <option value="1924">1924</option>
                                                                    <option value="1923">1923</option>
                                                                    <option value="1922">1922</option>
                                                                    <option value="1921">1921</option>
                                                                    <option value="1920">1920</option>
                                                                    <option value="1919">1919</option>
                                                                    <option value="1918">1918</option>
                                                                    <option value="1917">1917</option>
                                                                    <option value="1916">1916</option>
                                                                    <option value="1915">1915</option>
                                                                    <option value="1914">1914</option>
                                                                    <option value="1913">1913</option>
                                                                    <option value="1912">1912</option>
                                                                    <option value="1911">1911</option>
                                                                    <option value="1910">1910</option>
                                                                    <option value="1909">1909</option>
                                                                    <option value="1908">1908</option>
                                                                    <option value="1907">1907</option>
                                                                    <option value="1906">1906</option>
                                                                    <option value="1905">1905</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4>Marriage Date</h4>
                                                        <div class="col-md-4" style="padding-left: 0px">
                                                            <div class="form-group">
                                                                <select class="form-control" name="date">
                                                                    <option value="">Date</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <select class="form-control" name="month">
                                                                    <option value="">Month</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="padding-right: 0px">
                                                            <div class="form-group">
                                                                <select class="form-control" name="birth-year">
                                                                    <option value="">Year</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                    <option value="1999">1999</option>
                                                                    <option value="1998">1998</option>
                                                                    <option value="1997">1997</option>
                                                                    <option value="1996">1996</option>
                                                                    <option value="1995">1995</option>
                                                                    <option value="1994">1994</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1990">1990</option>
                                                                    <option value="1989">1989</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1984">1984</option>
                                                                    <option value="1983">1983</option>
                                                                    <option value="1982">1982</option>
                                                                    <option value="1981">1981</option>
                                                                    <option value="1980">1980</option>
                                                                    <option value="1979">1979</option>
                                                                    <option value="1978">1978</option>
                                                                    <option value="1977">1977</option>
                                                                    <option value="1976">1976</option>
                                                                    <option value="1975">1975</option>
                                                                    <option value="1974">1974</option>
                                                                    <option value="1973">1973</option>
                                                                    <option value="1972">1972</option>
                                                                    <option value="1971">1971</option>
                                                                    <option value="1970">1970</option>
                                                                    <option value="1969">1969</option>
                                                                    <option value="1968">1968</option>
                                                                    <option value="1967">1967</option>
                                                                    <option value="1966">1966</option>
                                                                    <option value="1965">1965</option>
                                                                    <option value="1964">1964</option>
                                                                    <option value="1963">1963</option>
                                                                    <option value="1962">1962</option>
                                                                    <option value="1961">1961</option>
                                                                    <option value="1960">1960</option>
                                                                    <option value="1959">1959</option>
                                                                    <option value="1958">1958</option>
                                                                    <option value="1957">1957</option>
                                                                    <option value="1956">1956</option>
                                                                    <option value="1955">1955</option>
                                                                    <option value="1954">1954</option>
                                                                    <option value="1953">1953</option>
                                                                    <option value="1952">1952</option>
                                                                    <option value="1951">1951</option>
                                                                    <option value="1950">1950</option>
                                                                    <option value="1949">1949</option>
                                                                    <option value="1948">1948</option>
                                                                    <option value="1947">1947</option>
                                                                    <option value="1946">1946</option>
                                                                    <option value="1945">1945</option>
                                                                    <option value="1944">1944</option>
                                                                    <option value="1943">1943</option>
                                                                    <option value="1942">1942</option>
                                                                    <option value="1941">1941</option>
                                                                    <option value="1940">1940</option>
                                                                    <option value="1939">1939</option>
                                                                    <option value="1938">1938</option>
                                                                    <option value="1937">1937</option>
                                                                    <option value="1936">1936</option>
                                                                    <option value="1935">1935</option>
                                                                    <option value="1934">1934</option>
                                                                    <option value="1933">1933</option>
                                                                    <option value="1932">1932</option>
                                                                    <option value="1931">1931</option>
                                                                    <option value="1930">1930</option>
                                                                    <option value="1929">1929</option>
                                                                    <option value="1928">1928</option>
                                                                    <option value="1927">1927</option>
                                                                    <option value="1926">1926</option>
                                                                    <option value="1925">1925</option>
                                                                    <option value="1924">1924</option>
                                                                    <option value="1923">1923</option>
                                                                    <option value="1922">1922</option>
                                                                    <option value="1921">1921</option>
                                                                    <option value="1920">1920</option>
                                                                    <option value="1919">1919</option>
                                                                    <option value="1918">1918</option>
                                                                    <option value="1917">1917</option>
                                                                    <option value="1916">1916</option>
                                                                    <option value="1915">1915</option>
                                                                    <option value="1914">1914</option>
                                                                    <option value="1913">1913</option>
                                                                    <option value="1912">1912</option>
                                                                    <option value="1911">1911</option>
                                                                    <option value="1910">1910</option>
                                                                    <option value="1909">1909</option>
                                                                    <option value="1908">1908</option>
                                                                    <option value="1907">1907</option>
                                                                    <option value="1906">1906</option>
                                                                    <option value="1905">1905</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

													<div class="col-md-2">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group ">
													    	@if($user->seva_nivrat==2)
													    		<input type="radio" class="personal_info seva_nirvit mb20px" name="seva_nivrat" value="1"> Yes
												   				<input type="radio" class="personal_info seva_nirvit mb20px" name="seva_nivrat" value="2" checked="checked"> No
													    	@else
													    	    <input type="radio" class="personal_info seva_nirvit mb20px" name="seva_nivrat" value="1" checked="checked"> Yes
												   				<input type="radio" class="personal_info seva_nirvit mb20px" name="seva_nivrat" value="2"> No
												   			@endif
												   		 </div>
												    </div>

                                                    <div class="col-md-2 antimg_pad" style="display: none;">
                                                        <h4>अंतिम पद</h4>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control personal_info" placeholder="अंतिम पद " name="education" id="antim_pad" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 antimg_pad" style="display: none;">
                                                        <h4>विभाग का नाम</h4>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control personal_info" placeholder="विभाग का नाम" name="education" id="vibhag" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h4>Education</h4>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control personal_info" placeholder="Education/शिक्षा " name="education" id="education" value="{{$user->education}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
													    <h4>समाज सेवा हेतु समय दान </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" id="social_hours" class="personal_info form-control" style="width: 15%;" value="{{$user->social_hours}}">
													      		&nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;
                                                            @if($user->social_hours_according==2)
													    		<input type="radio" name="social_hours_according" class="personal_info" value="1"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_info" value="2" checked="checked"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_info" value="3"> Monthly
													    	@elseif($user->social_hours_according==3)
													    		<input type="radio" name="social_hours_according" class="personal_info" value="1"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_info" value="2"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_info" value="3" checked="checked"> Monthly
												   			@else
												   				<input type="radio" name="social_hours_according" class="personal_info" value="1" checked="checked"> Daily
													      		<input type="radio" name="social_hours_according" class="personal_info" value="2"> Weekly
													      		<input type="radio" name="social_hours_according" class="personal_info" value="3"> Monthly
												   			@endif
                                                        </div>
												    </div>

                                                    <div class="col-md-5">
                                                        <h4>किसी अन्य संस्थाओ में पद/दायित्व</h4>
                                                        <div class="form-group">
                                                            <input class="form-control personal_info"  placeholder="किसी अन्य संस्थाओ में पद/दायित्व" name="pad" id="pad">
                                                        </div>
                                                    </div>

													<div class="col-md-6">
														<h4>कार्यालय/व्यापार/व्यवसाय का पता</h4>
												    	<div class="form-group">
										      			    <textarea class="form-control personal_info" rows="1" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address">{{$user->occupation_address}}</textarea>
													    </div>
												    </div>

                                                    <div class="col-md-6">
                                                        <h4>निवास का पता (Residential Address)</h4>
                                                        <div class="form-group">
                                                            <textarea class="form-control personal_info" rows="1" placeholder="निवास का पता" name="residential_address" id="residential_address">{{$user->residential_address}}</textarea>
                                                        </div>
                                                    </div>

													<div class="col-md-6">
														<div class="col-lg-4" style="padding-left: 0px;">
								                            <div class="form-group">
								                                <h4>State</h4>
								                                <select id="state" name="residential_state" class="form-control required personal_info" >
								                                	@if(!empty($state_details->id))
								                                		<option value="{{$state_details->id}}">{{$state_details->name}}</option>
						                                		  		<option value="">Select State</option>
									                                	@foreach($states as $state)
									                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
									                                	@endforeach
								                                	@else
								                                		<option value="">Select State</option>
								                                	@foreach($states as $state)
								                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
								                                	@endforeach
								                                	@endif
								                                </select>
								                            </div>
								                        </div>
	                        	                        <div class="col-lg-4">
								                            <div class="form-group">
								                                <h4>District</h4>
								                                <select id="district" name="residential_district" class="form-control required">
								                                	@if(!empty($city_details->id))
								                                	<option value="{{$city_details->id}}">{{$city_details->name}}</option>
								                                	@else
								                                	<option value="">Select District</option>
								                                	@endif
								                                </select>
								                            </div>
								                        </div>
														<div class="col-md-4" style="padding-right: 0px;">
													    	<h4>पिन कोड</h4>
													    	<div class="form-group">
														      <input type="text" class="form-control personal_info" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode" value="{{$user->residential_pincode}}">
														    </div>
													    </div>

												    </div>

												    <div class="col-md-6">
														<h4>स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें</h4>
												    	<div class="form-group">
										      				<textarea class="form-control personal_info" rows="5" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio">{{$user->bio}}</textarea>
													    </div>
												    </div>

													<div class="col-md-6 mb20px">
														<h4>प्रतिवर्ष न्यूनतम आर्थिक सहयोग 100/- प्रति प्राणी  के लिए सहमत हो |</h4>
														<p style="color:blue">(100/- वार्षिक दाता इस संस्था का पदाधकारी बन सकता हैं जिसे voting right होगा )</p>
												    </div>

													<div class="col-md-2 mb20px">
													    <div class="form-group ml0px">

													    	@if($user->donate_hundred==2)
													    		<input type="radio" name="donate_hundred" class="personal_info" value="1"> Yes
												      			<input type="radio" name="donate_hundred" class="personal_info" value="2" checked="checked"> No
												   			@else
												   				<input type="radio" name="donate_hundred" class="personal_info" value="1" checked="checked"> Yes
												      			<input type="radio" name="donate_hundred" class="personal_info" value="2"> No
												   			@endif

													    </div>
												    </div>

												    <div class="col-md-12 update_personal_info text-center">
														<input type="submit" class="btn btn-danger personal_info" name="update_personal_info" id="update_personal_info" value="Save/Submit Personal Information">
													</div>
												</div>
											</form>

<!-- ##################################################################################################################### -->
<!-- ##################################################################################################################### -->

											<br />
											<br />
											<div class="row">
												<div class="col-md-8">
									    			<h2 class="red">Optional Information / ऐच्छिक सूचनाएं </h2>
									    			<hr>
									    		</div>

									    		<!-- <div class="col-md-4 text-right">
                                                    <h4>
                                                                                                        <a href="javascript:;" id="edit_optional_information" class="edit_optional_information btn btn-info">
                                                                                                            Edit Optional Information
                                                                                                        </a>
                                                    </h4>
                                                </div> -->
								    		</div>

								    		<form class="form-inline" action="{{ route('updateOptionalInfo') }}" method="post">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

								    			<div class="row">
												    <div class="col-md-2">
												    	<h4>1. Blood Group</h4>
												    	<div class="form-group">
												    		<select class="form-control" name="bloodgroup" id="bloodgroup">

												    			@if($user_optional_details->blood_group)
																	<option value="{{$user_optional_details->blood_group}}" selected>{{$user_optional_details->blood_group}}</option>
												    			@endif

												    			<option value="">Select Blood Group</option>
												    			<option value="A+">A+</option>
												    			<option value="A-">A-</option>
												    			<option value="B+">B+</option>
												    			<option value="B-">B-</option>
												    			<option value="AB+">AB+</option>
												    			<option value="AB-">AB-</option>
												    			<option value="O+">O+</option>
												    			<option value="O-">O-</option>
												    		</select>
													    </div>
												    </div>

												  	<!-- <div class="col-md-6 mb10px">
                                                                                                            <h4>2. May I Help You Club का सदस्य बनना चाहते हैं
                                                                                                                <a href="{{ route('may_i_help_you') }}" target="_blank" style="color:blue;">see link</a>
                                                                                                            </h4>
                                                                                                            <div class="form-group ml0px">
                                                    
                                                                                                                @if($user_optional_details->club_member==2)
                                                                                                                    <input type="radio" name="club_member" class="radio" value="1">
                                                                                                                      Yes
                                                                                                                      <input type="radio" name="club_member" class="radio" value="2" checked="checked">
                                                                                                                      No
                                                                                                                   @else
                                                                                                                       <input type="radio" name="club_member" class="radio" value="1">
                                                                                                                      Yes
                                                                                                                      <input type="radio" name="club_member" class="radio" value="2" checked="checked">
                                                                                                                      No
                                                                                                                   @endif
                                                    
                                                                                                             </div>
                                                                                                         </div> -->

												 	<div class="col-md-5">
												    	<h4>3. ABC Club (आपसी भाई चारा क्लब) का सदस्य बनना चाहते हैं
												    		<a href="{{ route('abc_club') }}" target="_blank" style="color:blue;">see link</a>
												    	</h4>
													    <div class="form-group">

													    	@if($user_optional_details->abc_club_member==2)
													    		<input type="radio" name="abc_club_member" class="" value="1">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="abc_club_member" class="" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="abc_club_member" class="" value="2">
													      		No
												   			@endif

														</div>
													</div>

<!--                                                        <div class="col-md-6 mb10px">
                                                        <h4>4. वैश्य पंचायत / वैश्य वाहिनी का सदस्य बनना चाहोगे
                                                            <a href="{{ route('vaish_panchayat') }}" target="_blank" style="color:blue;">see link</a>
                                                        </h4>
                                                        <div class="form-group ml0px">

                                                            @if($user_optional_details->vaishya_panchayat==2)
                                                                <input type="radio" name="vaishya_panchayat" class="radio" value="1">
                                                                  Yes
                                                                  <input type="radio" name="vaishya_panchayat" class="radio" value="2" checked="checked">
                                                                  No
        @else
            <input type="radio" name="vaishya_panchayat" class="radio" value="1">
                                                                  Yes
                                                                  <input type="radio" name="vaishya_panchayat" class="radio" value="2" checked="checked">
                                                                  No
        @endif

                                                        </div>
                                                    </div> -->

													<div class="col-md-5 mb30px">
												     	<h4>5. मृत्यु होने पर ऑंखे दान/अंग दान/शरीर दान करना चाहेंगे</h4>

													    <div class="form-group ml0px">

													    	@if($user_optional_details->donate_body_parts==2)
													    		<input type="radio" name="donate_body_parts" class="" value="1">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="" value="2" checked="checked">
													      		No
												   			@else
												   				<input type="radio" name="donate_body_parts" class="" value="1" checked="checked">
													      		Yes
													      		<input type="radio" name="donate_body_parts" class="" value="2">
													      		No
												   			@endif

													    </div>
												    </div>

<!--                                                     <div class="col-md-2 mb10px">
     <h4>6. आवास</h4>

                                                        <div class="form-group ml0px">

                                                            @if($user_optional_details->self_home==2)
                                                                <input type="radio" name="self_home" class="radio" value="1""> अपना
              <input type="radio" name="self_home" class="radio" value="2" checked="checked"> किराये का
                                                               @else
                                                                   <input type="radio" name="self_home" class="radio" value="1" checked="checked"> अपना
              <input type="radio" name="self_home" class="radio" value="2"> किराये का
                                                               @endif

                                                        </div>
</div>

<div class="col-md-3 mb10px">
                                                        <h4>7. अपना वाहन </h4>

                                                        <div class="form-group ml0px">
                                                            <?php
                                                            $vehicle = $user_optional_details->vehicle;
                                                            $vehicle = explode("-", $vehicle);
                                                            $vehicle1 = '';
                                                            $vehicle2 = '';
                                                            if(in_array('1', $vehicle))
                                                            {
                                                                $vehicle1 = 'checked="checked"';
                                                            }
                                                            if(in_array('2', $vehicle))
                                                            {
                                                                $vehicle2 = 'checked="checked"';
                                                            }
                                                            ?>
          <input type="checkbox" name="vehicle[]" class="radio" value="1" <?= $vehicle1; ?>>
                                                                  Two Wheeler
          <input type="checkbox" name="vehicle[]" class="radio" value="2" <?= $vehicle2; ?>>
                                                                  Four Wheeler

                                                        </div>

</div>

<div class="col-md-7 mb10px">
                                                        <h4>8. परिवार में किसी सदस्य का पहचान पत्र,वोट कार्ड,राशन कार्ड,हेल्थ कार्ड,वरिष्ठ नागरिक कार्ड या विधवा पेंशन बनना है ?</h4>

                                                        <div class="form-group ml0px">

                                                            <?php
                                                            $cards = $user_optional_details->family_cards;
                                                            $cards = explode("-", $cards);
                                                            $card1 = '';
                                                            $card2 = '';
                                                            $card3 = '';
                                                            $card4 = '';
                                                            $card5 = '';
                                                            $card6 = '';
                                                            if(in_array('1', $cards))
                                                            {
                                                                $card1 = 'checked="checked"';
                                                            }
                                                            if(in_array('2', $cards))
                                                            {
                                                                $card2 = 'checked="checked"';
                                                            }
                                                            if(in_array('3', $cards))
                                                            {
                                                                $card3 = 'checked="checked"';
                                                            }
                                                            if(in_array('4', $cards))
                                                            {
                                                                $card4 = 'checked="checked"';
                                                            }
                                                            if(in_array('5', $cards))
                                                            {
                                                                $card5 = 'checked="checked"';
                                                            }
                                                            if(in_array('6', $cards))
                                                            {
                                                                $card6 = 'checked="checked"';
                                                            }
                                                            ?>

          <input type="checkbox" name="family_cards[]" class="radio" value="1" <?= $card1; ?>>
                                                                  पहचान पत्र
                                                              <input type="checkbox" name="family_cards[]" class="radio" value="2" <?= $card2; ?>>
                                                                  वोट कार्ड
          <input type="checkbox" name="family_cards[]" class="radio" value="3" <?= $card3; ?>>
                                                                  राशन कार्ड
          <input type="checkbox" name="family_cards[]" class="radio" value="4" <?= $card4; ?>>
                                                                  हेल्थ कार्ड
          <input type="checkbox" name="family_cards[]" class="radio" value="5" <?= $card5; ?>>
                                                                  वरिष्ठ नागरिक
          <input type="checkbox" name="family_cards[]" class="radio" value="6" <?= $card6; ?>>
                                                                  विधवा पेंशन
                                                        </div>
</div> -->

												    <div class="col-md-3">
											    		<h4>9. परिवार की वार्षिक आय</h4>
												    	<div class="form-group">

															<?php

    												    		if($user_optional_details->annual_income == '2')
    												    		{
    																$income = '2 लाख तक';
    												    		}
    											    			if($user_optional_details->annual_income == '2-10')
    											    			{
    																$income = '2 लाख से 10 लाख तक';
    											    			}
    											    			if($user_optional_details->annual_income == '10-50')
    											    			{
    																$income = '10 लाख से 50 लाख तक';
    											    			}
    											    			if($user_optional_details->annual_income == '50up')
    											    			{
    																$income = '50 लाख से ऊपर';
    											    			}

											    			?>

												    		<select class="form-control" name="annual_income">

																@if($user_optional_details->annual_income)
																	<option value="{{$user_optional_details->annual_income}}" selected>{{$income}}</option>
											    				@endif

												    			<option value="">Select Income</option>
												    			<option value="2">2 लाख तक</option>
												    			<option value="2-10">2 लाख से 10 लाख तक</option>
												    			<option value="10-50">10 लाख से 50 लाख तक</option>
												    			<option value="50up">50 लाख से ऊपर</option>
												    		</select>
													    </div>
												    </div>

											    	<div class="col-md-12 mb10px">
													    <h4>10. उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं | संस्था की ओर से प्राप्त होने वाली सूचनाओं से हमें कोई आपत्ति नहीं है
													    	<input type="checkbox" placeholder="Aadhar Card No." class="" name="agree" required="" style="width: 25px;height: 25px;">

													    	<i class="fa fa-check" aria-hidden="true"></i> Tick in the box</h4>

														<div class="col-md-12 update_optional_info text-center">
															<input type="submit" class="btn btn-danger" name="update_optional_info" id="update_optional_info" value="Save/Submit Optional Information">
														</div>
													</div>

												</form>
											</div>
										</div>

<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->

				                        <!-- Family Member -->
                                        
										<div class="tab-pane fade" id="family">

                                            <div id="family_add_show_btn" style="display:none;">
                                                <div class="col-md-12 text-right">
                                                    <a class="btn btn-info mb10px" id="addmember">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add Family Member
                                                    </a>
                                                </div>

                                            </div>
                                            <table class="table table-striped" id="family_info_trable" style="display:none;">
											  	<thead>
												    <tr>
												      <th>Full Name</th>
												      <th>Email</th>
												      <th>Phone</th>
												      <th>Relation With Family Head</th>
												      <th>Action</th>
												    </tr>
											  	</thead>
											  	<tbody>
												  	<tr>
												      	<td>{{$user->name}}</td>
												      	<td>{{$user->email}}</td>
												      	<td>{{$user->phone}}</td>
												      	<td>परिवार के मुखिया</td>
												      	<td>
												      		<a href="{{ route ('profile') }}" class="btn btn-info btn-xs">view</a>
											       		</td>
											     	 </tr>
													@foreach($familymember as $member)
												  	<tr>
												      	<td>{{$member->name}}</td>
												      	<td>{{$member->email}}</td>
												      	<td>{{$member->phone}}</td>
												      	<td>{{$member->relation_to_head_member}}</td>
												      	<td>
												      		<a href="{{route('viewfamilymember', ['id' => $member->id])}}" class="btn btn-info btn-xs">view</a>

												       		<a href="#{{$member->id}}" class="btn btn-danger btn-xs" data-toggle="modal">delete</a>
											       		</td>
											     	</tr>
	 												<div id="{{$member->id}}" class="modal fade" role="dialog">
														<div class="modal-dialog">

															<!-- Modal content-->
															<div class="modal-content">
															  <div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><i class="fa fa-trash"></i> Delete Category</h4>
															  </div>
															  <div class="modal-body">
																<p>Are you sure you want to Delete ?</p>
															  </div>
															  <div class="modal-footer">
																<form method="post" action="{{route('deletefamilymember')}}">

																	{{ csrf_field() }}

																	<input type="hidden" id="delt" name="delete_family_member" value="{{$member->id}}">

																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button class="btn btn-danger" type="submit" name="delete" value="{{$member->id}}">Delete</button>
																</form>
															  </div>
															</div>

														</div>
													</div>
											     	 @endforeach

										     	</tbody>
											</table>

										<div id="add_member_form_div">
											<div id="family_add_show_btn">
                                                <div class="col-md-12 text-right">
						                        	<a class="btn btn-info mb10px show_family_members" id="show_family_members">
														<i class="fa fa-plus" aria-hidden="true"></i> Show Family Members
													</a>
						                        </div>
					                        </div>
				                        	<form class="form-inline" action="{{ route('add_member') }}" method="post" enctype="multipart/form-data">

												{{ csrf_field() }}

												<input type="hidden" name="user_id" value="{{ $user->user_id }}">

												<div class="mb10px">
													<div class="col-md-12">
														<!-- personal_status -->
														@if(session('personal_status'))
														<div class="alert alert-success">{{ session('personal_status') }}</div>
														@endif

														<!-- religion_status -->
														@if(session('religion_status'))
														<div class="alert alert-success">{{ session('religion_status') }}</div>
														@endif

													 	<!-- Update member success message -->
									                	@if(session('update_member'))
															<div class="alert alert-success">{{ session('update_member') }}</div>
														@endif

													 	<!-- Delete member success message -->
									                	@if(session('delete_member'))
															<div class="alert alert-success">{{ session('delete_member') }}</div>
														@endif
													</div>

													<div class="col-md-12">
										    			<h2 class="red">Add Family Members परिवार के सदस्यों को यहां जोड़ें</h2>
										    			<hr>
										    		</div>

									    		</div>

									    			<div class="col-md-3">
												    	<div class="form-group" style="margin-bottom: 30px;">
													      	<input type="text" class="form-control member_profile" placeholder="Name" name="name" id="name" required="required">
													    </div>
													</div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" class="form-control member_profile" placeholder="मुखिया से सम्बन्ध" name="relation_to_head_member" id="relation_to_head_member">
											    		</div>
										    		</div>

									    		 	<div class="col-md-3">
													    <div class="form-group ">
												    		<input type="radio" class="" name="m_gender" value="1">&nbsp;&nbsp;Male
											   				<input type="radio" class="" name="m_gender" value="2">&nbsp;&nbsp;Female
												   		</div>
											   		 </div>

				    								<div class="col-md-3">
								                    	<div class="form-group">
													    	<input type="file" name="image" class="form-control personal_info" placeholder="Image">
													    </div>
													</div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="tel" class="form-control" name="phone" id="phone" required="required" placeholder="Mobile/Whatsapp">
													    </div>
												    </div>

												    <div class="col-md-3">
												    	<div class="form-group">
													      <input type="email" class="form-control" placeholder="Email Id" name="email" id="email" required="required">
													    </div>
												    </div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="Date Of Birth" name="dob" id="dob">
													    </div>
												    </div>

													<div class="col-md-3">
												    	<div class="form-group">
													      <input type="text" format="Y-m-d" class="form-control datepicker" placeholder="Marriage Date" name="marriage_date" id="marriage_date">
													    </div>
												    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Education/Experience " name="education" id="education">
                                                        </div>
                                                    </div>


													<div class="col-md-2">
												    	<h4>सेवा निवृत हैं</h4>
													    <div class="form-group">
												    		<input type="radio" class="" name="seva_nivrat" value="1">Yes
											   				<input type="radio" class="" name="seva_nivrat" value="2">No
												   		 </div>
												    </div>

												    <div class="col-md-4">
													    <h4>समाज सेवा हेतु समय दान </h4>
														<div class="form-group ml0px">
												      		<input type="text" name="social_hours" class="form-control" style="width: 15%;"> &nbsp;&nbsp;&nbsp;घंटे &nbsp;&nbsp;

												      		<input type="radio" name="social_hours_according" class="" value="1">
													      		Daily
												      		<input type="radio" name="social_hours_according" class="" value="2">
													      		Weekly
												      		<input type="radio" name="social_hours_according" class="" value="3">
													      		Monthly
													    </div>
												    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" placeholder="कार्यालय/व्यापार/व्यवसाय का पता " name="occupation_address" id="occupation_address"></textarea>
                                                        </div>
                                                    </div>

													<div class="col-md-6">
												    	<div class="form-group">
										      				<textarea class="form-control" rows="3" placeholder="निवास का पता" name="residential_address" id="residential_address"></textarea>
													    </div>
													</div>

													<div class="col-md-6">
												    	<div class="form-group">
										      				<textarea class="form-control" rows="3" placeholder="स्वयं/परिवार/वंश की उल्लेखनीय उपलब्धि यहां लिखें" name="bio" id="bio" placeholder="BIO"></textarea>
													    </div>
												    </div>

					    	                        <div class="col-lg-2">
							                            <div class="form-group">
							                                <select id="state1" name="residential_state" class="form-control required personal_info" >

							                                	<option value="">Select State</option>
							                                	@foreach($states as $state)
							                                		<option value="{{ $state->id }}">{{ $state->name }}</option>
							                                	@endforeach

							                                </select>
							                            </div>
							                        </div>

                        	                        <div class="col-lg-2">
							                            <div class="form-group">
							                                <select id="district1" name="residential_district" class="form-control required" disabled="disabled">
							                                	<option value="">Select District</option>
							                                </select>
							                            </div>
							                        </div>

													<div class="col-md-2">
												    	<div class="form-group">
													      <input type="text" class="form-control" placeholder="पिन कोड" name="residential_pincode" id="residential_pincode">
													    </div>
												    </div>

													<div class="col-md-12 mb10px">
													    <h4>उपरोक्त सभी सूचना सही हैं व मैंने अपनी इच्छा से दी हैं | <input type="checkbox" placeholder="Aadhar Card No." class="" name="agree" required="required" style="width: 25px;height: 25px;margin-bottom: 0px;vertical-align: middle;"> <i class="fa fa-check" aria-hidden="true"></i> Tick in the box
													    </h4>
													</div>

													<div class="col-md-6 text-left mb10px">
														<input type="submit" class="btn btn-danger" name="add_member" id="add_member" value="Save/Submit">
													</div>
												</form>
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

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $(".show_family_members").on('click', function(){
    	/*$("#family").css({
    		'display':'block'
    	});
    	$("#add_member_form_div").css({
    		'display':'none'
    	});*/
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
    	$(document).on("change", "#state", function(){
    		var state = $('#state').val();

    		if(state == '')
    		{
    			$("#district").html('');
    			$("#district").html('<option value="">Select District</option>');
    			$("#district").attr('disabled', 'disabled');
    		}
    		else
    		{
    			$.ajax({
				    method: 'post',
				    url: 'getDistrictByStateForUser',
				    data: {"_token": "{{ csrf_token() }}", 'state' : state},
				    async: true,
				    success: function(response){

				    	console.log(response);

				        var cities = '';
				        $.each(response, function(i, item) {
						    cities += '<option value="'+item.id+'">'+item.name+'</option>';
						})

						$("#district").html('');
						$("#district").html(cities);
						$("#district").removeAttr('disabled');
				    },
				    error: function(data){
				        console.log(data);
				    },
				});
    		}

    	});
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
    	$(document).on("change", "#state1", function(){
    		var state = $('#state1').val();

    		if(state == '')
    		{
    			$("#district1").html('');
    			$("#district1").html('<option value="">Select District</option>');
    			$("#district1").attr('disabled', 'disabled');
    		}
    		else
    		{
    			$.ajax({
				    method: 'post',
				    url: 'getDistrictByStateForUser',
				    data: {"_token": "{{ csrf_token() }}", 'state' : state},
				    async: true,
				    success: function(response){

				    	console.log(response);

				        var cities = '';
				        $.each(response, function(i, item) {
						    cities += '<option value="'+item.id+'">'+item.name+'</option>';
						})

						$("#district1").html('');
						$("#district1").html(cities);
						$("#district1").removeAttr('disabled');
				    },
				    error: function(data){
				        console.log(data);
				    },
				});
    		}

    	});
    });
</script>
@endsection