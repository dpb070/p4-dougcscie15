
<!-- Using Susan's shorthand one-liner to set selected value  -->
<div class="form-group">
  <label for="test_id">Test</label>
  <select id="test_id" name="test_id" class="form-control">
    @foreach($testList as $test_id => $name)
    <option value="{{ $test_id }}" {{ ( old('result_date', $result->test_id)  == $test_id) ? "SELECTED" : '' }}>
      {{ $name }}
    </option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="result_date">Result Date</label> @include('includes.resultsResultDateError')
  <input type="text" class="form-control" id="result_date" name="result_date" value="{{ old('result_date', $result->result_date) }}" placeholder="YYYY-MM-DD">
</div>
<div class="form-group">
  <label for="value">Value</label> @include('includes.resultsValueError')
  <input type="text" class="form-control
    @if (isset($result->value))
      @if ($result->value < $result->test->default_low_warning or $result->value > $result->test->default_high_warning)
         action_msg
      @endif
    @endif"
    id="value" name="value" value="{{ old('value', $result->value) }}" placeholder="test result">
</div>
<div class="form-group">
  <label for="result_date">Comments</label>
  <input type="text" class="form-control" id="comments" name="comments" value="{{ old('comments', $result->comments) }}" placeholder="misc comments">
</div>
