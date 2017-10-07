<!-- user.name (string) -->
<h6>Name</h6>
<p>{{ $user->name }}</p>

<hr>

<!-- user.email (string) -->
<h6>Email</h6>
<p>{{ $user->email }}</p>

<hr>

<!-- user.created_at (timestamp) -->
<h6>Created at</h6>
<p>{{ $user->created_at->diffForHumans() }}</p>

<hr>

<!-- user.is_admin (bool) -->
<h6>Administrator</h6>
@include('admin.users._partials.is_admin')