@extends('layouts.admin')

@section('content')

	@if($page=='login')
		@include('pages.admin.auth.login')
		
	@elseif($page=='dashboard')
		@include('pages.admin.dashboard')
		
	@elseif($page=='home')
		@include('pages.admin.home')
	
	@elseif($page=='about')
		@include('pages.admin.about')
		
	@elseif($page=='contact')
		@include('pages.admin.contact')
		
	@elseif($page=='post')
		@include('pages.admin.post')
		
	@elseif($page=='menu')
		@include('pages.admin.menu')
	
		
	@endif

@stop
