@if($errors->get('default_high_warning'))
  @foreach($errors->get('default_high_warning') as $error)
    <span class="error_display">{{ $error }}</span>
  @endforeach
@else
    <span class="error_hide">Errors Here</span>
@endif
