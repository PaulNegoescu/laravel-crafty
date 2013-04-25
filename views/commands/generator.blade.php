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
</div>