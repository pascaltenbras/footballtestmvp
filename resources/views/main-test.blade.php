@extends('layout')

@section('title', 'Main test')

@section('header')
<link rel="stylesheet" type="text/css" href="css/own.css">
@endsection

@section('content')

<section id="test">
	<h1>Test your football player</h1>

	<div id="template_box">
	</div>
</section>

@include('template')

@endsection

@section('scripts')
<script type="text/javascript">
	function loadTemplate() {
		random = Math.floor((Math.random() * 2) + 1);
		if (random == 1) {
			target = 'left';
		}
		else {
			target = 'right';
		}

		random = Math.floor((Math.random() * 2) + 1);
		if (random == 1) {
			target += ' top';
		}
		else {
			target += ' bottom';
		}

		var template = $('#sample_test').html();
		Mustache.parse(template); 
		var rendered = Mustache.render(template, {
			test_id: results.length + 1,
			level: currentLevel,
			target: target
		});
		$('#template_box').html(rendered);
	}

	function nextStep(result) {
		console.log(result);

		if (result == 1) {
			results.push(currentLevel);
			if (currentLevel <= 15) {
				currentLevel += 5;
			}
		}
		else {
			results.push(-currentLevel);
			if (currentLevel >= 10) {
				currentLevel -= 5;
			}
		}

		console.log(results);

		if (results.length == 5) {
			$('#template_box').html('Sending the results...');
			currentLevel = calculateResult();
		}
		if (results.length < lengthWanted) {
			loadTemplate();
		}
		if (results.length == lengthWanted) {
			$('#template_box').html('Sending the results...');
			currentLevel = calculateResult();
			if (currentLevel >= 0 || currentLevel <= 20) {
				localStorage.setItem("score", currentLevel);
			}
			else {
				localStorage.setItem("score", 0);
			}
			window.location.replace("dashboard");
		}
	}

	function calculateResult() {
		totalScore = 0;

		nbHits = 0;
		for (var i = results.length - 1; i >= 0; i--) {
			if (results[i] > 0) {
				nbHits++;
				totalScore += results[i];
			}
		}

		totalScore = totalScore / nbHits;
		for (var i = results.length - 1; i >= 0; i--) {
			if (results[i] < 0) {
				totalScore += (2 / results[i]);
			}
		}

		totalScoreInt = Math.round(totalScore);
		if ((totalScoreInt % 5 == 0) && totalScoreInt > 0) {
			totalScore = totalScoreInt;
		}
		else {
			totalScore = totalScoreInt + 3;
		}


		console.log('You are at level : ' + totalScore);
		return (Math.round(totalScore / 5) * 5);
	}

	results = [];
	currentLevel = 10;
	lengthWanted = 9;

	$('section#test').on('click', 'button.button_action', function() {
		if ($(this).data('target') == 'hit') {
			nextStep(1);
		}
		else if ($(this).data('target') == 'miss') {
			nextStep(-1);
		}
		else {
			loadTemplate();
		}
	});

	loadTemplate();
</script>
@endsection