@extends('layouts.main')

@section('content')
<div class="container contactUsHeader">
	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Contact us</h4>
			<p>Fill in the form below and we will get back to you as quickly as possible.</p>
		</div>
	</div>
	<form>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="myContactLabel" for="fName">First Name(required)</label>
					<input required type="text" class="form-control myContactInput" id="fName">
				</div>
				<div class="form-group">
					<label class="myContactLabel" for="email">Email(required)</label>
					<input required type="email" class="form-control myContactInput" id="email">
				</div>
			</div>
			
			<div class="col-md-6">
				
				<div class="form-group">
					<label class="myContactLabel" for="lName">Last Name(required)</label>
					<input required type="text" class="form-control myContactInput" id="lName">
				</div>
				<div class="form-group">
					<label class="myContactLabel" for="pNum">Phone Number</label>
					<input type="text" class="form-control myContactInput" id="pNum" >
				</div>
			</div> 
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label class="myContactLabel" for="subject">Subject</label>
					<input required type="text" class="form-control myContactInput" id="subject">
				</div>

				<div class="form-group">
					<label class="myContactLabel" for="message">Message</label>
					<textarea id="message"></textarea>
				</div>
				<button id="contactUsCTA">send message</button>
			</div>
		</div>
	</form>
</div>
@endsection
