<table class="table-bordered table-striped">
  <thead>
    <tr>
      @if ($editButton)
      <td> </td>
      @endif
      <td>Test</td>
      <td>Units</td>
      <td>Validation Low Limit</td>
      <td>Validation High Limit</td>
      <td>Default Low Warning</td>
      <td>Default High Warning</td>
      <td>Comments</td>
      @if ($deleteButton)
      <td> </td>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach($tests as $test)
    <tr>
      @if ($editButton)
      <td>
        <a class="btn btn-info btn-xs" role="button"  onclick="return {{ $tableButtonsEnabled }}" href="/tests/{{ $test->id }}/edit">
          <span class="fa fa-pencil-square-o"></span> Edit
        </a>
      </td>
      @endif
      <td>{{ $test->name }}</td>
      <td>{{ $test->units }}</td>
      <td>{{ $test->validation_low_limit }}</td>
      <td>{{ $test->validation_high_limit }}</td>
      <td>{{ $test->default_low_warning }}</td>
      <td>{{ $test->default_high_warning }}</td>
      <td>{{ $test->comments }}</td>
      @if ($deleteButton)
      <td>
        <a class="btn btn-danger btn-xs" role="button"  onclick="return {{ $tableButtonsEnabled }}"  href="/tests/{{ $test->id }}/delete">
          <span class="fa fa-minus-circle"></span> Delete
        </a>
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
