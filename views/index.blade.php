@layout('laravel-crafty::master')

@section('content')
	<form action="" method="post" class="span6">
		<input type="hidden" name="prevCommands" value="{{ htmlentities(json_encode($prevCommands)) }}" />
		<h1>Crafty - A Laravel Artisan and Generator GUI</h1>
		<h2>Generic / Config</h2>
		<div>
			@include("laravel-crafty::commands.generic")
		</div>

		<h2>Migrations</h2>
		<div>
			@include("laravel-crafty::commands.migrations")
		</div>

		<h2>Bundles</h2>
		<div>
			@include("laravel-crafty::commands.bundles")
		</div>

		<h2>Unit Tests</h2>
		<div>
			@include("laravel-crafty::commands.tests")
		</div>

		<h2>Generator</h2>
		<div>
			@include("laravel-crafty::commands.generator")
		</div>	
	</form>
	<div class="results span6">
		@foreach ($prevCommands as $command)
			<div class="command">{{ $command }}</div>
		@endforeach

		@if (!empty($result))
			<pre>{{ $result }}</pre>
		@else
			Waiting for commands!
		@endif
	</div>
@endsection