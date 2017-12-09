@extends('layouts.public_app')

@section('content')
<!--First Row-->
<style>
	.numbox
	{
	    float: left;
	    background: #fff;
	    color: #000;
	    padding-left: 5px;
	    padding-right: 5px;
	}
</style>
<div class="container shadow">

		<div class="row">
			<div class="col-md-7">
				<div id="myCarousel" class="carousel slide pt10px pb20px" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
						  <img src="resources/frontend_assets/img/vaisya.jpg" alt="Los Angeles" style="height:280px;">
						</div>

						<div class="item">
						  <img src="resources/frontend_assets/img/matrimonial.jpg" alt="Chicago">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-6">
						<h4 class="brdr"><span class="numbox">1.</span> आज और कल की महत्वपूर्ण सूचनाएं<br>Tomorrow is Last Date<br>Today is Last Day</h4>
					</div>
					<div class="col-md-6">
						<a href="{{ route('news_exchange') }}" class="ad">
							<h4 class="brdr"><span class="numbox">2.</span> समाचारों का आदान-प्रदान <br><br> News&nbsp;&nbsp; Exchange</h4>
						</a>
					</div>
					<div class="col-md-6">
						<h4 class="brdr"><span class="numbox">3.</span> परिचय&nbsp;&nbsp; सेवा <br> <br> Matrimonial&nbsp; Service</h4>
					</div>
					<div class="col-md-6">
						<a href="{{ route('employee_services') }}" class="ad">
							<h4 class="brdr"><span class="numbox">4.</span> रोजगार&nbsp;&nbsp; सेवा <br> <br> Employment&nbsp; Service</h4>
						</a>
					</div>
					<div class="col-md-6">
						<h4 class="brdr"><span class="numbox">5.</span> प्रेरक लेख, मन की बात, विचार मंच <br><br>Motivational Article</h4>
					</div>
					<div class="col-md-6">
						<h4 class="brdr"><span class="numbox">6.</span> पंजीकृत&nbsp;&nbsp; परिवार <br> <br> Digital&nbsp;&nbsp; Directory</h4>
					</div>

				</div>
			</div>
		</div>


	<div class="row">
	<div class="col-md-9">
			<div class="buffer_reduce">
				<div class="row ads">
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="सदयस्ता" class="ad">
							<h3 class="hcolor"><span class="numbox">7.</span>महाराजा अग्रसेन जी <br>अग्रोहा धाम <br>Maharaja Agrasen Ji <br> Agroha Dham</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('moa_registration') }}" title="वर्ष 2018 की वार्षिक कार्य योजना" class="ad">
							<h3 class="hcolor"><span class="numbox">8.</span>संस्था का सविधान, पंजीकरण व दान प्रमाण पत्र<br>MOA Registration, 80-G Certificate</h3>
						</a>
					   </div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('annual_action_plan') }}" title="कार्यकर्ता  नेटवर्क" class="ad">
							<h3 class="hcolor"><span class="numbox">9.</span>वर्ष 2018-19 की वार्षिक कार्य योजना, उपलब्धि<br>Annual Action Plan & &nbsp; Achievements</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('five_year_central_action_plan') }}" title="10 व् 5 वर्षीय केंद्रीय कार्य योजना" class="ad">
							<h3 class="hcolor"><span class="numbox">10.</span>5 वर्षीय&nbsp;&nbsp; केंद्रीय कार्य योजना <br> 5 Year&nbsp;&nbsp; Central Action Plan</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('renowned_persons') }}" title="वैश्य महापुरुष" class="ad">
							<h3 class="hcolor1"><span class="numbox">11.</span>वैश्य महापुरुष <br><br>Renowned Persons</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('history_motivational_story') }}" title="2018 की उपलब्धि" class="ad">
							<h3 class="hcolor1"><span class="numbox">12.</span>इतिहास पुस्तकें, अग्रकाव्य, प्रेरक प्रसंग  <br>History Books, Songs, Motivational Story</h3>
						</a>
					   </div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('heritage_cultural_festival') }}" title="अपने स्मारक/धरोहर, तीर्थ स्थान, त्यौहार" class="ad">
							<h3 class="hcolor1"><span class="numbox">13.</span>अपने स्मारक/धरोहर, &nbsp;&nbsp;तीर्थ स्थान, त्यौहार <br>Heritage/Dham Culture, Festivals</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="रोजगार सेवा " class="ad">
							<h3 class="hcolor1"><span class="numbox">14.</span>अपने बड़े उद्योग <br><br>Our&nbsp; Big&nbsp; Industries</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('dharmshala') }}" title="वर्ष 2018 की वार्षिक कार्य योजना" class="ad">
							<h3 class="hcolor2"><span class="numbox">15.</span>अपनी धर्मशाला, होटल, फार्म हाउस,&nbsp; हॉस्टल <br>Dharmshala, Hotel, Bhawan,&nbsp;&nbsp; P.G.</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Blood Donors की सूची class"ad">
							<h3 class="hcolor2"><span class="numbox">16.</span>अपने स्कूल, कॉलेज, संस्थान <br> School, Colleges, Eng. and Medical Institutes</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अंगदानियो की सूची" class="ad">
							<h3 class="hcolor2"><span class="numbox">17.</span>अपने क्लिनिक, अस्पताल <br><br>Our&nbsp; Clinic <br>Hospitals</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="वैश्य पंचायत" class="ad">
							<h3 class="hcolor2"><span class="numbox">18.</span>कार्यरत सामाजिक व धार्मिक इकाइयां <br> Working Social &&nbsp; Religious Units</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="May I Help You Club" class="ad">
							<h3 class="hcolor3"><span class="numbox">19.</span>सालगिरह&nbsp; की&nbsp;&nbsp; शुभ कामनाएं <br> Happy Marraige Anniversary</h3>
						</a>
					   </div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="आपसी भाई चारा क्लब" class="ad">
							<h3 class="hcolor3"><span class="numbox">20.</span>जन्मदिन की शुभ कामनाएं <br><br>Happy Birthday </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Mailing List" class="ad">
							<h3 class="hcolor3"><span class="numbox">21.</span>व्यापर निदेशिका <br> <br> Trade Directory</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Vaisa Media Federation " class="ad">
							<h3 class="hcolor3"><span class="numbox">22.</span>स्थानीय, जिला व राज्य&nbsp;&nbsp; इकाइयां<br> Local,&nbsp;&nbsp; District and State Units</h3>
						</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="वैश्य विभूतिया " class="ad">
							<h3 class="hcolor4"><span class="numbox">23.</span>रक्तदाताओं की सूची<br><br>Blood Donors</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="वैश्य स्मारक / धरोहर " class="ad">
							<h3 class="hcolor4"><span class="numbox">24.</span>अंगदाताओं की सूची <br><br>Organ Donors </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="वैश्य साहित्य / इतिहास अग्रोहा " class="ad">
							<h3 class="hcolor4"><span class="numbox">25.</span>समयदाताओं की सूची <br><br>Time Donors </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('representative_member') }}" title="प्रेरक प्रसंग वैश्य विभूति" class="ad">
							<h3 class="hcolor4"><span class="numbox">26.</span>प्रतिनिधि सदस्यों की सूची <br><br> Representative Members</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="रेरक video" class="ad">
							<h3 class="hcolor5"><span class="numbox">27.</span>प्रेरक वीडियो, डाक्यूमेंट्री फिल्म <br> Video, Documentary Film</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('new_calendar') }}" title="वैश्य तीर्थ धार्मिक" class="ad">
							<h3 class="hcolor5"><span class="numbox">28.</span>वार्षिक&nbsp; कैलेंडर&nbsp; एवं &nbsp;&nbsp;&nbsp;प्रगति&nbsp; रिपोर्ट<br>New Calender&nbsp;&nbsp; with Progress&nbsp; Report</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अपने त्यौहार रीती रिवाज" class="ad">
							<h3 class="hcolor5"><span class="numbox">29.</span>केंद्रीय प्राप्ति एवं खर्चो का ब्यौरा <br> Receipt&nbsp; & Expenditure&nbsp; Statement</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Member Register" class="ad">
							<h3 class="hcolor5"><span class="numbox">30.</span>सदस्य&nbsp; रजिस्टर <br><br>Member&nbsp; Register</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('vaish_panchayat') }}" title="Various Units" class="ad">
							<h3 class="hcolor6"><span class="numbox">31.</span>वैश्य पंचायत व  वैश्य वाहिनी <br> Vaish Panchayat & Vaish Vahini</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('may_i_help_you') }}" title="वार्षिक कैलेंडर " class="ad">
							<h3 class="hcolor6"><span class="numbox">32.</span>सहायता&nbsp;&nbsp; क्लब <br><br> May I Help You Club</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('abc_club') }}" title="आय व्यय निवारण " class="ad">
							<h3 class="hcolor6"><span class="numbox">33.</span>आपसी भाई चारा क्लब <br><br> A B C Club </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="केंद्रीय कार्यकारिणी " class="ad">
							<h3 class="hcolor6"><span class="numbox">34.</span>जरूरत मंद बच्चे व परिवार  <br> Needy Children & Families</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="राज्य इकाइयां" class="ad">
							<h3 class="hcolor7"><span class="numbox">35.</span>प्रतिभाशाली बच्चे <br><br> Brilliant Children</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="जिला इकाइयां" class="ad">
							<h3 class="hcolor7"><span class="numbox">36.</span>खिलाड़ी <br><br> Player/Sports Persons</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अपने स्कूल, कॉलेज ,आईटीआई" class="ad">
							<h3 class="hcolor7"><span class="numbox">37.</span>विभिन्न क्षेत्रों में कलाकार<br><br> Master of Other Arts</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अपनी NGO धार्मिक संस्थाए " class="ad">
							<h3 class="hcolor7"><span class="numbox">38.</span>अपनी धार्मिक संस्थाए <br><br> Other Religious Bodies/NGOs</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="दानदाताओं की सूची" class="ad">
							<h3 class="hcolor8"><span class="numbox">39.</span>दानदाताओं की सूची<br><br> List&nbsp; of&nbsp; Donors</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="काम की बातें" class="ad">
							<h3 class="hcolor8"><span class="numbox">40.</span>काम की बातें <br><br> Useful Information</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Various Data" class="ad">
							<h3 class="hcolor8"><span class="numbox">41.</span>उपयोगी संपर्क <br><br> Useful&nbsp; Contacts</h3>
						</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="कार्यो की प्रगति रिपोर्ट" class="ad">
							<h3 class="hcolor8"><span class="numbox">42.</span>कार्यो की प्रगति रिपोर्ट<br><br> Various Progress Reports</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Various Reports" class="ad">
							<h3 class="hcolor9"><span class="numbox">43.</span>केंद्रीय मिनट्स बुक <br><br> Kendriya Minutes Book</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अन्य मिनट्स बुक" class="ad">
							<h3 class="hcolor9"><span class="numbox">44.</span>अन्य मिनट्स बुक <br><br> Other Minutes Book</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="रजिस्ट्रेशन प्रमाण पत्र " class="ad">
							<h3 class="hcolor9"><span class="numbox">45.</span>पत्र - व्यवहार फोल्डर<br><br>Correspondence Folder</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="विभिन्न कार्य समितियां" class="ad">
							<h3 class="hcolor9"><span class="numbox">46.</span>विभिन्न कार्य समितियां <br><br> Various Project Samiti</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="Units Minute Book " class="ad">
							<h3 class="hcolor10"><span class="numbox">47.</span>प्रथम केंद्रीय कार्यकारिणी <br><br> First Governing Body</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="अस्थाई/स्थाई सम्पत्तियों का ब्यौरा" class="ad">
							<h3 class="hcolor10"><span class="numbox">48.</span>अस्थाई/स्थाई सम्पत्तियों का ब्यौरा <br> Details of Movable & Immovable Assets</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="List of Ready " class="ad">
							<h3 class="hcolor10"><span class="numbox">49.</span>व्यापार संगठनों की सूची <br><br> List of Trade Unions</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="javascript:;" title="List of Ready " class="ad">
							<h3 class="hcolor10"><span class="numbox">50.</span>व्यापार निदेशिका <br><br> Trade Directory</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('membership') }}" title="विभिन्न कार्य समितियां" class="ad">
							<h3 class="hcolor9"><span class="numbox">51.</span>सदस्यता <br><br> Membership</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('sangthan_pranali') }}" title="Units Minute Book " class="ad">
							<h3 class="hcolor10"><span class="numbox">52.</span><br><br> संस्था की संगठन प्रणाली  </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('karya_pranali') }}" title="अस्थाई/स्थाई सम्पत्तियों का ब्यौरा" class="ad">
							<h3 class="hcolor10"><span class="numbox">53.</span><br><br> संस्था की कार्यप्रणाली </h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('tolet_services') }}" title="List of Ready " class="ad">
							<h3 class="hcolor10"><span class="numbox">54.</span><br><br> Tolet Services</h3>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class=" hidetext">
						<a href="{{ route('car_pooling') }}" title="List of Ready " class="ad">
							<h3 class="hcolor10"><span class="numbox">55.</span><br><br> Car Pooling</h3>
						</a>
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