@extends('layouts.default')


@section('content')
<ul class="breadcrumb">
		<li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
		<li class="active">Contact</li>
	</ul>
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	54, Nawala Road,<br/> Narahenpita
			<br/>Colombo 5,Sri Lanka<br/>
			<br><br/>
			cdamdr04@gmail.com<br/>
			﻿Tel + 94 112 421 028<br/>
			web:cda.gov.lk
		</p>		
		</div>
			
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span4">
		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9986126549297!2d79.87683161426766!3d6.890767920697663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2dcb7f7a8b%3A0xe12e9a9aa85c3ba0!2sCoconut+Development+Authority!5e0!3m2!1sen!2slk!4v1561192875587!5m2!1sen!2slk" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
		</div>
	</div>

@endsection