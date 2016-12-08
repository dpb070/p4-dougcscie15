<label for="name">Name</label> @include('includes.testsNameError')
<input type="text" class="form-control" name="name" placeholder="test name" value="{{old('name', $test->name)}}">
</div>
<div class="form-group">
  <label for="units">Units</label> @include('includes.testsUnitsError')
  <input type="text" class="form-control" name="units" placeholder="measurement units" value="{{ old('units', $test->units) }}">
</div>
<div class="form-group">
  <label for="validation_low_limit">Validation Low Limit</label> @include('includes.testsValidationLowLimitError')
  <input type="text" class="form-control" name="validation_low_limit" placeholder="entry low limit for results" value="{{old('validation_low_limit', $test->validation_low_limit)}}">
</div>
<div class="form-group">
  <label for="validation_high_limit">Validation High Limit</label> @include('includes.testsValidationHighLimitError')
  <input type="text" class="form-control" name="validation_high_limit" placeholder="entry high limit for results" value="{{old('validation_high_limit', $test->validation_high_limit)}}">
</div>
<div class="form-group">
  <label for="default_low_warning">Default Low Warning Value</label> @include('includes.testsDefaultLowWarningValueError')
  <input type="text" class="form-control" name="default_low_warning" placeholder="flag displayed results below this value" value="{{old('default_low_warning', $test->default_low_warning)}}">
</div>
<div class="form-group">
  <label for="default_high_warning">Default High Warning Value</label> @include('includes.testsDefaultHighWarningValueError')
  <input type="text" class="form-control" name="default_high_warning" placeholder="flag displayed results above this value" value="{{old('default_high_warning', $test->default_high_warning)}}">
</div>
<div class="form-group">
  <label for="comments">Comments</label>
  <input type="text" class="form-control" name="comments" placeholder="additional comments" value="{{old('comments', $test->comments)}}">
