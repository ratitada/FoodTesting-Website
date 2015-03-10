@extends('layout.default')
@section('content')
	<div class="row" >
    	<div class="large-12 columns" >
    		<div class="panel">
    			<div class="feature-image">
	      			<img src="{{ URL::asset('public/assets/image/bg1.jpg') }}">
	      		</div>
	      		<div class="panel" style= "position: relative;float: right;margin-right:40px;opacity: 0.9;margin-top: -100px;font-style: italic;font-size: 20pt;margin-left: 10px;">
	      			Create your Testing here!
	      		</div>
	      	</div>
    	</div>
  	</div>
  	<!-- Second Band (Image Left with Text) -->

  	<div class="row">
	    <div class="large-4 columns">
	    	<div class="panel">
	    		<div class="feature-image new">
		      		<img src="{{ URL::asset('public/assets/image/fruit.jpg') }}">
		      	</div>
		      	<h2 class="header">Test Fruit</h2>
		      	<p>
		      		Some Person said: Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.
		      	</p>
		    </div>
	    </div>
	    <div class="large-4 columns">
		    <div class="panel">
		    	<div class="feature-image new">
		     		<img src="{{ URL::asset('public/assets/image/veggy.jpg') }}">
		     	</div>
		     	<h2 class="header">Test Veggy</h2>
		      	<p>
		      		Some Person said: Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.
		      	</p>
		    </div>
	    </div>
	    <div class="large-4 columns">
		    <div class="panel">
		    	<div class="feature-image new">
		     		<img src="{{ URL::asset('public/assets/image/snack.jpg') }}">
		     	</div>
		     	<h2 class="header">Also test Snack</h2>
		      	<p>
		      		Some Person said: Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.
		      	</p>
		    </div>
	    </div>
  	</div>


@endsection