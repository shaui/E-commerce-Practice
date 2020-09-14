<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>@yield('title')</title>

		<!-- Google CSS Font -->
		<link href="https://fonts.googleapis.com/css?family=Kumar+One+Outline&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	    <!-- Bootstrap core CSS -->
    	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- for carousel --> 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	    <!-- -->


	    <!-- for carousel -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
	</head>
	<body>
		@include('layout/navbar')

		@yield('content')

		@include('layout/footer')

		<script src="{{ asset('jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	</body>
</html>