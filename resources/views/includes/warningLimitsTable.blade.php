<table class="table-bordered table-striped">
    <tbody>
        <thead>
            <tr>
                <td> </td>
                <td>Test</td>
                <td>Low Warning</td>
                <td>High Warning</td>
                <td> </td>
            </tr>
        </thead>

        @foreach($warningLimits as $warningLimit)
        <tr>
            <td>
                <a class="btn btn-info btn-xs" role="button" {{ $tableButtonState }} href="/warninglimits/{{ $warningLimit->id }}/edit">
                    <span class="fa fa-pencil-square-o"></span> Edit
                </a>
            </td>
            <td>{{ $warningLimit->test->name }}</td>
            <td>{{ $warningLimit->low_warning }}</td>
            <td>{{ $warningLimit->high_warning }}</td>
            <td>
              <a class="btn btn-danger btn-xs" role="button" {{ $tableButtonState }} href="/warninglimits/{{ $warningLimit->id }}/delete">
                <span class="fa fa-minus-circle"></span> Delete
              </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
