@if($errors->get('validation_low_limit'))
  @foreach($errors->get('validation_low_limit') as $error)
    <span class="error_display">{{ $error }}</span>
  @endforeach
@else
    <span class="error_hide">Errors Here</span>
@endif
