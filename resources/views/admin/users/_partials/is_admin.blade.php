@if($user->is_admin)
    <p class="text-success">Enabled</p>
@else
    <p class="text-danger">Disabled</p>
@endif