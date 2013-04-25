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
	{{ Form::text('migrate:makeParams', Input::old('migrate:makeParams'), array('placeholder' => 'Migration Name')) }}
</div>