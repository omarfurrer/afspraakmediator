@extends('layouts.main')

@section('content')

<!-- Home background sector --> 
<div class="absolute-wrapper homeBgContainer">
</div>

<div class="container-fluid">
	<div class="row text-center homeHeaderRow">
		<div class="col-md-12">
			<h1>Translator Translations</h1>
		</div>
		<div class="col-md-12">
			<h4>Professional translations at affordable prices</h4>
		</div> 
		<div class="col-md-12">
			<a class="btn btn-success" href="#myForm" id="ctaHomePg">GET A QUOTATION</a>
		</div>   
	</div>
</div>

<!-- Video sector --> 

<div class="container vidContainer">
	<div class="row text-center">
		<div class="col-md-12">
			<h1>Translation Agency Translator</h1>
		</div>
		<div class="col-md-12">
			<hr class="redLine">
		</div>
		<div class="col-md-12">
			<h2 class="greySubHeader">Professional translations with superior quality</h2>
		</div>
		<div class="col-md-12">
			<p class="greyParagraph">Are you looking for a translation that gets your message across and reads just like the original? Would you like to enjoy the benefits of doing business on the internet, but still get the personal attention you deserve? Translation Agency Scriptware has been delivering professional translations with superior quality for more than 25 years. On time, as agreed, and always at an affordable price! But Scriptware offers much more than just expert translators who know how to talk to your target group in the right way.</p>
		</div>
		<div class="col-md-8 offset-md-2">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
			</div>
		</div>
	</div>
</div>


@include("subviews.contactForm._main")

<!-- panoramaImg sector --> 

<div class="container-fluid panoramaImg">
	<div class="row text-center">
		<div class="col-md-12">
			<h1>Translator</h1>
		</div>
		<div class="col-md-12">
			<h5><small>= INNOVATION IN TRANSLATION =</small></h5>
		</div>
	</div>
</div>

<!-- team sector --> 
<div class="container team">
	<div class="row">
		<div class="col-md-6">
			<img src="../images/img3.jpg">
		</div>
		<div class="col-md-6">
			<h5>THE TEAM AT TRANSLATION AGENCY TRANSLATOR</h5>
			<p>Over the years, we have brought together a team of dedicated people, each an expert in their own field. Project managers who know how to select the right translators and coordinate projects. Translators who can translate anything and everything, reviewers who can spot the tiniest error, and advisers who can come up with efficient solutions for your documentation process. But whatever their role within our company, all our staff have one thing in common: they are all professionals with a passion for languages</p>
		</div> 
	</div>
</div>

<!-- counter sector --> 
<div class="container-fluid counterContainer">
	<div class="row text-center">
		<div class="col-md-3 sideBorder">
			<h1>26</h1>
			<h4>YEARS OF EXPERIENCE</h4>
		</div>
		<div class="col-md-3 sideBorder">
			<h1>20,054,725</h1>
			<h4>WORDS PER YEAR</h4>
		</div>
		<div class="col-md-3 sideBorder">
			<h1>974</h1>
			<h4>NEW CUSTOMERS</h4>
		</div>
		<div class="col-md-3">
			<h1>1,368</h1>
			<h4>TRANSLATORS</h4>
		</div>
	</div>
</div>

<!-- benefits sector --> 
<div class="container-fluid benefitsContainer text-center">
	<div class="row">
		<div class="col-md-4">
			<img src="../images/colPic.png" class="benefitsIcon" alt="euro sign icon">
			<h4>Affordable prices</h4>
			<p>Competitive rates and efficient solutions. Success guaranteed.</p>
		</div>

		<div class="col-md-4">
			<img src="../images/colPic2.png" class="benefitsIcon" alt="clock icon">
			<h4>Always on time</h4>
			<p>A promise is a promise. We always keep our word, so you know you can rely on us.</p>
		</div>

		<div class="col-md-4">
			<img src="../images/colPic3.png" class="benefitsIcon2" alt="satisfaction icon">
			<h4>Satisfaction guarantee</h4>
			<p>We know how good our translators are. So we can guarantee you are going to be satisfied, or your money back!</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="../images/colPic4.png" class="benefitsIcon3" alt="team icon">
			<h4>Experienced translators</h4>
			<p>Professionals with a passion for languages. And naturally only native speakers.</p>
		</div>

		<div class="col-md-4">
			<img src="../images/colPic5.png" class="benefitsIcon" alt="contact icon">
			<h4>Personal contact</h4>
			<p>Communication and service. Personal attention is the key to our success.</p>
		</div>
		
		<div class="col-md-4">
			<img src="../images/colPic6.png" class="benefitsIcon" alt="check icon">
			<h4>Satisfied customers</h4>
			<p>Our No. 1 priority. For every project, large or small!</p>
		</div>
	</div>
</div>

<!-- tailor sector -->

<div class="container-fluid tailorContainer">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h1>TAILOR-MADE SOLUTIONS FOR ALL YOUR TRANSLATION NEEDS</h1>
			</div>
			<div class="col-md-12">
				<p>Need help with the translation of a simple text? Or have you got a complex situation with specific demands, like a Content Management System, simultaneous multilingual work flows, documents that need to be translated on a daily basis, or a team of proofreaders in different countries? Translation Agency Scriptware will be glad to help you manage the whole process efficiently and easily.</p>

			</div>
			<div class="col-md-12">
				<button class="btn btn-success" id="ctaHomePg">MAKE AN APPOINTMENT</button>
			</div>
		</div>
	</div>
</div>

<!-- cards sector -->

<div class="container homeCardsContainer">
	<div class="row text-center">
		<div class="col-md-12">
			<h1>OUR LATEST NEWS</h1>
		</div>
		<div class="col-md-12">
			<hr class="redLine">
		</div>
		<div class="col-md-12">
			<h2 class="greySubHeader">Recent developments inside our agency and within the translation world</h2>
		</div>
	</div>
	<div class="row mt-50">
		<div class="col-md-4">
			<a href="#">
				<img src="../images/cardImg1.jpg" class="cardImg">
			</a>
			<a href="#" class="cardTitle">About XTM Cloud 10</a>
			<p class="cardSmallText">BY: MARÍA CRUZ,    17 MAART, 2017</p>
			<p class="cardParagraph">XTM has increased its number of users in the past few years and is now a widely used CAT tool among translators and agencies. At Scriptware, we use this tool whenever possible in translation</p>
			<a href="#" class="cardCta">READ MORE</a>
		</div>
		<div class="col-md-4">
			<a href="#">
				<img src="../images/cardImg2.jpg" class="cardImg">
			</a>
			<a href="#" class="cardTitle">3 Tips for the perfect website translation</a>
			<p class="cardSmallText">BY: FRANK TER REEHORST,     2 APRIL, 2016</p>
			<p class="cardParagraph">Would you like to open up an online store and cash in on the boom in internet trade? Then obviously you need a website translation that really hits the spot. After all, you only get one chance to make a first </p>
			<a href="#" class="cardCta">READ MORE</a>
		</div>
		<div class="col-md-4">
			<a href="#">
				<img src="../images/cardImg3.jpg" class="cardImg">
			</a>
			<a href="#" class="cardTitle">Do we still need human translators?</a>
			<p class="cardSmallText">BY: FRANK TER REEHORST,     2 APRIL, 2016</p>
			<p class="cardParagraph">We hear the same question almost every day, from multinationals, legal firms, and manufacturing companies: "do we really need a professional translator?" A very good question, of course, especially </p>
			<a href="#" class="cardCta">READ MORE</a>
		</div>
	</div> 
</div>

<!-- relax sector -->

<div class="container-fluid relaxContainer">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h3>Mediazine is a dynamic magazine. Translation Agency Scriptware has supported our international growth every step of the way.</h3>
			</div>
			<div class="col-md-12">
				<p><span>- MONIQUE HEMMES,</span> IMEDIATE</p>
			</div>
		</div>
	</div>
</div> 

<!-- cta separator sector -->

<div class="container-fluid ctaSeparator">
	<div class="container">
		<div class="row">			
			<div class="col-md-9">
				<h3>Start your translation at Translation Agency Scriptware</h3>
			</div>

			<div class="col-md-3">
				<a class="btn ctaFillLess" href="#myForm">GET A QUOTATION</a>
			</div>
		</div>
	</div>  
</div>

@endsection

@push('scripts')

@endpush
