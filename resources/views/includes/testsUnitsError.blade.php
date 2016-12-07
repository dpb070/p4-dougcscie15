@if($errors->get('units'))
  @foreach($errors->get('units') as $error)
    <span class="error_display">{{ $error }}</span>
  @endforeach
@else
    <span class="error_hide">Errors Here</span>
@endif
