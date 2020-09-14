@extends('layout/base')

@section('title','Home')

@section('content')
<script >
	var parameter = window.location.search;
	var value = parameter.substr(1);
	$("img").attr('src', value);
	console.log(value);
</script>

<div class="container-fluid" style="padding-top: 20vh;">
	<div class="col-sm-5">
		<img src="../img/p{{ $id }}.jpg" id="image">
		{{-- <img src="" id="image"> --}}
	</div>
</div>


{{-- <script type="text/javascript" src="{{asset('js/store.js')}}"></script> --}}
@endsection