<table class="table-bordered table-striped">
    <thead>
      <tr>
        <td> </td>
        <td>Test</td>
        <td>Result Date</td>
        <td>Value</td>
        <td>Comments</td>
        <td> </td>
      </tr>
    </thead>
  <tbody>
    @foreach($results as $result)
    <tr>
      <td>
        <a class="btn btn-info btn-xs" role="button" onclick="return {{ $tableButtonsEnabled }}" href="/results/{{ $result->id }}/edit">
          <span class="fa fa-pencil-square-o"></span> Edit
        </a>
      </td>
      <td>{{ $result->test->name }}</td>
      <td>{{ $result->result_date }}</td>
      <td>{{ $result->value }}</td>
      <td>{{ $result->comments }}</td>
      <td>
        <a class="btn btn-danger btn-xs" role="button" onclick="return {{ $tableButtonsEnabled }}" href="/results/{{ $result->id }}/delete">
          <span class="fa fa-minus-circle"></span> Delete
        </a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
