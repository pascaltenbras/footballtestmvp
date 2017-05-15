@extends('layout')

@section('title', 'Main test')

@section('header')
<link rel="stylesheet" type="text/css" href="css/own.css">
@endsection

@section('content')

<section id="test">
	<h1>Dashboard</h1>

	<div class="row">
		<div class="col-lg-4">
			<h2>Technic</h2>

			<div class="row">
				<span class="item">Shooting</span>
				<span class="result positive">
					<i class="fa fa-caret-up" aria-hidden="true"></i>
					<span class="valueToReplace">12</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Finishing</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Pass</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Crossing</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">First touch</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Offensive header</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Defensive header</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Dribble</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
			<div class="row">
				<span class="item">Shot power</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					Na
				</span>
			</div>
		</div>

		<div class="col-lg-4">
			<h2>Mental</h2>

			<div class="row">
				<span class="item">Communication</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Decision making</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Team play</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Concentration</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Agressivity</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Motivation</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Calmness</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
		</div>

		<div class="col-lg-4">
			<h2>Physic</h2>

			<div class="row">
				<span class="item">Sprint</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Acceleration</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Power</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Jumping power</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
			<div class="row">
				<span class="item">Stamina</span>
				<span class="result equal">
					<i class="fa fa-minus" aria-hidden="true"></i>
					<span>Na</span>
				</span>
			</div>
		</div>
	</div>
</section>

@include('template')

@endsection

@section('scripts')
<script type="text/javascript">
	score = 0;
	score = localStorage.getItem("score");
	$('.valueToReplace').html(score);
</script>
@endsection