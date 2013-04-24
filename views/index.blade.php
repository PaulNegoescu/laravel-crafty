@layout('laravel-crafty::master')

@section('content')
	<form action="" method="post" class="span6">
		<input type="hidden" name="prevCommands" value="{{ htmlentities(json_encode($prevCommands)) }}" />
		<fieldset>
			<legend><h2>Artisan</h2></legend>
			<h3>Generic / Config</h3>

			<button type="submit" name="submit" value="help:commands" class="btn btn-info">Help:Commands</button>
			<div class="btn-group">
				<button type="submit" name="submit" value="key:generate" class="btn btn-success">Key:Generate</button>
				<button type="submit" name="submit" value="session:table" class="btn btn-inverse">Session:Table</button>
			</div>


			<h3>Migrations</h3>

			<div class="row-fluid">
				<button type="submit" name="submit" value="migrate:install" class="btn btn-info">Install</button>
			</div>
			<div class="well well-small row-fluid span6">
				<div class="span6">
					@foreach($migrateParams as $param => $values)
						<label class="radio">
							{{ Form::radio('migrateParams', (string)$param, $values[1]) }}
							{{ $values[0] }}
						</label>
					@endforeach
				</div>
				<div class="span6">
					<button type="submit" name="submit" value="migrate" class="btn btn-success">Migrate</button>
				</div>
			</div>
			<div class="btn-group row-fluid">
				<button type="submit" name="submit" value="migrate:rollback" class="btn btn-warning">Rollback</button>
				<button type="submit" name="submit" value="migrate:rebuild" class="btn btn-danger">Rebuild</button>
				<button type="submit" name="submit" value="migrate:reset" class="btn btn-danger">Reset</button>
			</div>
			<div class="input-prepend row-fluid">
				<button type="submit" name="submit" value="migrate:make" class="btn btn-success">Make</button>
				{{ Form::text('migrate:makeParams', Input::old('migrate:makeParams'), array('placeholder' => 'Make Parameters')) }}
			</div>
			
		</fieldset>

		<fieldset>
			<legend><h2>Generator</h2></legend>
			<h3>Resources</h3>
			<div class="row-fluid well well-small span6">
				@foreach($generateCmd as $cmd => $values)
					<label class="radio">
						{{ Form::radio('generateCmd', $cmd, $values[1]) }}
						{{ $values[0] }}
					</label>
				@endforeach
			</div>
			<div class="input-prepend row-fluid">
				<button type="submit" name="submit" value="generate" class="btn btn-success">Generate</button>
				{{ Form::text('generateParams', Input::old('generateParams'), array('placeholder' => 'Generate Parameters')) }}
			<div>
		</fieldset>
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