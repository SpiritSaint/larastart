<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        // Get the all the users paginated by 10 results
        $users = $this->users->paginate(10);

        // Return the view with all the paginated users
        return view('admin.users.index')->with([
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with([
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')->with([
            'user' => $user,
        ]);
    }
}
