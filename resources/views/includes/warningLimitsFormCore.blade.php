<div class="form-group">
  <label for="test_id">Test</label>
  <select id="test_id" name="test_id" class="form-control">
    <!-- Using Susan's shorthand one-liner to set selected value  -->
    @foreach($testList as $test_id => $name)
    <option value="{{ $test_id }}" {{ ($warningLimit->test_id == $test_id) ? "SELECTED" : '' }}>
      {{ $name }}
    </option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="low_warning">Low Warning</label> @include('includes.warningLimitsLowWarningError')
  <input type="text" class="form-control" id="low_warning" name="low_warning" value="{{ old('low_warning', $warningLimit->low_warning) }}" placeholder="flag results below this value">
</div>
<div class="form-group">
  <label for="high_warning">High Warning</label> @include('includes.warningLimitsHighWarningError')
  <input type="text" class="form-control" id="high_warning" name="high_warning" value="{{ old('high_warning', $warningLimit->high_warning) }}" placeholder="flag results abpve this value">
</div>
