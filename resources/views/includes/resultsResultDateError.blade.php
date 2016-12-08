@if($errors->get('result_date'))
  @foreach($errors->get('result_date') as $error)
    <span class="error_display">{{ $error }}</span>
  @endforeach
@else
    <span class="error_hide">Errors Here</span>
@endif
