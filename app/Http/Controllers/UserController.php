<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', auth()->user());

        return view('users.index');
    }

    public function edit(User $user)
    {
        $this->authorize('viewAny', auth()->user());

        return view('users.edit', compact('user'));
    }
}