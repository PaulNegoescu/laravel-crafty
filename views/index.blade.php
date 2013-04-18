@layout('crafty::master')

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

			<button type="submit" name="submit" value="migrate:install" class="btn btn-info">Install</button>
			<div class="btn-group row-fluid">
				<button type="submit" name="submit" value="migrate" class="btn btn-success">Migrate</button>
				<button type="submit" name="submit" value="migrate:rollback" class="btn btn-warning">Rollback</button>
				<button type="submit" name="submit" value="migrate:rebuild" class="btn btn-danger">Rebuild</button>
				<button type="submit" name="submit" value="migrate:reset" class="btn btn-danger">Reset</button>
			</div>
			<div class="input-prepend row-fluid">
				<button type="submit" name="submit" value="migrate:make" class="btn btn-success">Make</button>
				<input type="text" name="migrate:makeParams" id="makeParams" placeholder="migration_name" />
			</div>
			
		</fieldset>

		<fieldset>
			<legend><h2>Generator</h2></legend>
			<h3>Resources</h3>
			<div class="row-fluid">
				<div class="btn-group span7">
					<button type="submit" name="submit" value="generate:controller" class="btn btn-success">Controller</button>
					<button type="submit" name="submit" value="generate:model" class="btn btn-success">Model</button>
					<button type="submit" name="submit" value="generate:migration" class="btn btn-success">Migration</button>
					<button type="submit" name="submit" value="generate:view" class="btn btn-success">View</button>
				</div>
				<div class="span5">
					<input type="text" name="generateParams" id="generateParams" class="span12" placeholder="params" />
				</div>
			</div>
			
		</fieldset>
	</form>
	<div class="results span6">
		@foreach ($prevCommands as $command)
			<div class="command">{{ $command['command'] }}</div>
			<div class="result hide">{{ $command['result'] }}</div>
		@endforeach

		@if (!empty($result))
			<pre> {{ $result }} </pre>
		@else
			Waiting for commands!
		@endif
	</div>
@endsection