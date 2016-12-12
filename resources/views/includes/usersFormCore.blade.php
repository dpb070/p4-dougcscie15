
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" placeholder="user name">
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="text" class="form-control" name="password"  value="{{ old('password', $user->password) }}" placeholder="password (restrictions)">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="text" class="form-control" name="email"  value="{{ old('email', $user->email) }}"placeholder="email address">
</div>

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
