
<div class="form-group">
  <label for="name">Name</label> @include('includes.usersNameError')
  <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
  <label for="password">Password</label> @include('includes.usersPasswordError')
  <input type="password" class="form-control" id="password" name="password"  value="{{ old('password', $user->password) }}">
</div>
<div class="form-group">
  <label for="email">Email</label> @include('includes.usersEmailError')
  <input type="text" class="form-control" id="email" name="email"  value="{{ old('email', $user->email) }}">
</div>

<!-- to persist encrypted password info to determine change -->
<input type="hidden" class="form-control" id="originalPassword" name="originalPassword" value="{{ $user->password }}">

@if ($appUser->role == 'ADMIN')
<div class="form-group">
    <label for="role">Role</label>
    <select id="role" name="role">
        @if (isset($user->role))
        <option value="{{ old('role', $user->role) }}" {{ ( old('role', $user->role)  == 'ADMIN') ? "SELECTED" : '' }}>ADMIN</option>
        <option value="{{ old('role', $user->role) }}" {{ ( old('role', $user->role)  == 'USER') ? "SELECTED" : '' }}>USER</option>
        @else
        <option value="ADMIN">ADMIN</option>
        <option value="USER" SELECTED>USER</option>
        @endif
    </select>
</div>
@endif
