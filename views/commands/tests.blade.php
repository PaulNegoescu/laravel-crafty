<div class="input-prepend row-fluid">
	<button type="submit" name="submit" value="test" class="btn btn-success">Test</button>
	{{ Form::text('testParams', Input::old('testParams'), array('placeholder' => 'Bundle Name')) }}
</div>