<div class="form-group">
  <label for="id">Id</label>
  <input type="text" class="form-control" name="id" value="{{ old('id', $user->id) }}" >
</div>
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
  <input type="text" class="form-control" name="role"  value="{{ old('role', $user->role) }}" placeholder="role">
</div>
