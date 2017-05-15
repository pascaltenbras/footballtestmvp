<template id="sample_test">
	@{{ test_id }} - Take a kick at level @{{ level }}<br>
	Target : @{{ target }}<br>

	<div class="row buttons">
		<button class="btn btn-primary button_action" data-target="hit">Hit</button>
		<button class="btn btn-primary button_action" data-target="miss">Miss</button>
		<button class="btn btn-default button_action" data-target="reload">Reload</button>
	</div>
</template>