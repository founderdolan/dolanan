@extends('app')

@section('content')
<div class="container top70">
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
	<div class="row">
		<div class="col-md-8">

			col-md-8
		<!-- col-md-8 -->
		</div>
		
		<!-- Side Right -->
		<div class="col-md-4">
			Col-md-4
		<!-- col-md-4 -->
		</div>
	<!-- ROW-->
	</div>
<!-- container -->
</div>
@endsection