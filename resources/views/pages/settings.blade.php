@extends('layout')


@section('content')
<div class="jumbotron">
    <p>Settings</p>
</div>

    	
<div id="exTab3" >	
	<ul  class="nav nav-pills">
		<li class="active">
    	<a  href="#1b" data-toggle="tab">Profile</a>
		</li>
		<li><a href="#2b" data-toggle="tab">Timeline</a>
		</li>
		<li><a href="#3b" data-toggle="tab">Security</a>
		</li>
			<li><a href="#4b" data-toggle="tab">Others</a>
		</li>
	</ul>

	<div class="tab-content clearfix">
		
		<div class="tab-pane active" id="1b">
      		 @include('settings.profile')
		</div>
		
		<div class="tab-pane" id="2b">
      		@include('settings.timeline')
		</div>
    	
    	<div class="tab-pane" id="3b">
      		@include('settings.security')
		</div>
    
    	<div class="tab-pane" id="4b">
      		@include('settings.others');
		</div>
	</div>
  </div>


@stop



@section('javascripts')

@stop