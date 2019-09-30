@extends('layouts.default')


@section('content')
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="{{ route('home.index') }}">Home</a> <span class="divider">/</span></li>
		<li class="active">FAQs</li>
    </ul>

	<h1>FAQ</h1>
	<hr class="soften"/>	
	<div class="accordion" id="accordion2">
		<div class="accordion-group">
		  <div class="accordion-heading">
			<h4><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			  What are the primary uses of Coconut Oil?
			</a></h4>
		  </div>
		  <div id="collapseOne" class="accordion-body collapse"  >
			<div class="accordion-inner">Coconut Oil is a true household essential. It can be used across everyday life for beauty & grooming, oral hygiene, pregnancy and baby care, and everyday wellbeing. If you are new to Coconut Oil, we have pulled together some of our favorite uses and share these on Coconut Matter’s Beginner’s Guide to Coconut Oil. We will continue to upload useful tips, share resources, articles and recipes on this website and our social media.

			</div>
		  </div>
		</div>
		<div class="accordion-group">
		  <div class="accordion-heading">
			<h4><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
			  What is the shelf life of for Coconut Oil?
			</a></h4>
		  </div>
		  <div id="collapseTwo" class="accordion-body collapse"  >
			<div class="accordion-inner">
				When properly stored in a dry place, Coconut Oil will last more than 2 years. To prevent rancidity, store away from damp areas and ensure that it does not come in direct contact with water. Because it is a stable, natural oil that is high in saturated fat, it does not require refrigeration.
				<br>We suggest using clean utensils to decant our coconut oil into small glass containers for separate use in the bathroom, bedroom or kitchen to avoid contamination.</br>
			</div>
		  </div>
		</div>
		<div class="accordion-group">
		  <div class="accordion-heading">
			<h4><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					What is a 100% pure coconut product?
			</a></h4>
		  </div>
		  <div id="collapseThree" class="accordion-body collapse"  >
			<div class="accordion-inner">
				Coconut products are 100% pure when they do not have any additives.  Everything that is in the coconut product comes from the coconut itself.  The coconut products may undergo certain processes but the raw materials and ingredients only come from the coconut.  If water, stabilizers, sweeteners or gums are added, the coconut product is no longer 100% pure.</div>
		  </div>
		</div>

	  </div>

    </div>
</div>

@endsection