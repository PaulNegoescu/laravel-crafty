<div class="row-fluid well well-small span6">
	@foreach($bundleCmd as $cmd => $values)
		<label class="radio">
			{{ Form::radio('bundleCmd', $cmd, $values[1]) }}
			{{ $values[0] }}
		</label>
	@endforeach
</div>
<div class="input-prepend row-fluid">
	<button type="submit" name="submit" value="bundle" class="btn btn-success">Bundle</button>
	{{ Form::text('bundleParams', Input::old('bundleParams'), array('placeholder' => 'Bundle Name')) }}
</div>